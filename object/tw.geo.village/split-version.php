<?php

if (!file_exists(__DIR__ . '/outputs/object.csv')) {
    echo 'Please run "php gen-data.php" first' . PHP_EOL;
    exit(1);
}

if (!is_dir(__DIR__ . '/outputs/versions')) {
    mkdir(__DIR__ . '/outputs/versions');
}

$fp = fopen(__DIR__ . '/outputs/object.csv', 'r');
$columns = fgetcsv($fp);

$load_data = function() use ($fp, $columns) {
    $data = [];
    $current_version = null;
    while ($row = fgetcsv($fp)) {
        $record = array_combine($columns, $row);
        if ($current_version !== $record['_version']) {
            if ($current_version !== null) {
                yield [$current_version, $data];
            }
            $current_version = $record['_version'];
            $data = [];
        }
        $data[] = $record;
    }

    if ($current_version !== null) {
        yield [$current_version, $data];
    }
};

$objects = [];
foreach ($load_data() as $version_records) {
    list($version, $records) = $version_records;
    foreach ($records as $record) {
        if ($record['COUNTY_ID'] == '') {
            unset($objects[$record['_id']]);
        } else {
            $objects[$record['_id']] = $record;
        }
    }
    $output = fopen(__DIR__ . '/outputs/versions/' . $version . '.csv', 'w');
    fputcsv($output, $columns);
    foreach ($objects as $object) {
        fputcsv($output, $object);
    }
    fclose($output);
}

