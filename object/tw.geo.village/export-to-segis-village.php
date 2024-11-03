<?php

if (!file_exists(__DIR__ . '/outputs/log.csv')) {
    echo 'log.csv not found' . PHP_EOL;
    exit(1);
}
if (!file_exists(__DIR__ . '/segis-village')) {
    echo 'segis-village not found' . PHP_EOL;
    exit(1);
}

$fp = fopen(__DIR__ . '/outputs/log.csv', 'r');
$cols = fgetcsv($fp);
$logs = [];
while ($rows = fgetcsv($fp)) {
    $logs["{$rows[0]}-{$rows[1]}"] = $rows[2];
}
fclose($fp);

$fp = fopen(__DIR__ . '/outputs/object.csv', 'r');
$cols = fgetcsv($fp);
$output = fopen(__DIR__ . '/segis-village/history.jsonl', 'w');
$objects = [];
// act: init, add, data-change, geo-change, remove
while ($rows = fgetcsv($fp)) {
    $values = array_combine($cols, $rows);
    $id = $values['_id'];
    $version = $values['_version'];
    $version_number = intval(str_replace('-', '', $version));
    $geo_id = $values['_geo_id'];
    unset($values['_id'], $values['_version'], $values['_geo_id']);

    if ($version == 0) {
        $objects[$id] = ['data' => $values, 'geoid' => $geo_id];
        fputs($output, json_encode([
            'act' => 'init',
            'time' => 0,
            'id' => $id,
            'data' => [
                'data' => $values,
                'geoid' => $geo_id,
            ],
        ], JSON_UNESCAPED_UNICODE) . "\n");
        copy(
            __DIR__ . "/geos/{$geo_id}.json",
            __DIR__ . "/segis-village/output_geojsons/{$geo_id}.json"
        );
        continue;
    }

    if (!array_key_exists($id, $objects)) {
        $objects[$id] = ['data' => $values, 'geoid' => $geo_id];
        fputs($output, json_encode([
            'act' => 'add',
            'time' => $version_number,
            'id' => $id,
            'data' => [
                'data' => $values,
                'geo_from' => [],
                'geoid' => $geo_id,
            ],
            'log' => $logs["{$id}-{$version}"],
        ], JSON_UNESCAPED_UNICODE) . "\n");
        copy(
            __DIR__ . "/geos/{$geo_id}.json",
            __DIR__ . "/segis-village/output_geojsons/{$geo_id}.json"
        );
        continue;
    }

    if ($values['COUNTY_ID'] == '') {
        unset($objects[$id]);
        fputs($output, json_encode([
            'act' => 'remove',
            'time' => $version_number,
            'id' => $id,
            'data' => [
                'move-to' => [],
            ],
            'log' => $logs["{$id}-{$version}"],
        ], JSON_UNESCAPED_UNICODE) . "\n");
        continue;
    }

    if ($objects[$id]['data'] != $values) {
        fputs($output, json_encode([
            'act' => 'data-change',
            'time' => $version_number,
            'id' => $id,
            'data' => [
                'old' => $objects[$id]['data'],
                'new' => $values,
            ],
            'log' => $logs["{$id}-{$version}"],
        ], JSON_UNESCAPED_UNICODE) . "\n");

        $objects[$id]['data'] = $values;
    }

    if ($objects[$id]['geoid'] != $geo_id) {
        $objects[$id]['geoid'] = $geo_id;
        fputs($output, json_encode([
            'act' => 'geo-change',
            'time' => $version_number,
            'id' => $id,
            'data' => [
                'geo_from' => [],
                'geoid' => $geo_id,
            ],
            'log' => $logs["{$id}-{$version}"],
        ], JSON_UNESCAPED_UNICODE) . "\n");
        copy(
            __DIR__ . "/geos/{$geo_id}.json",
            __DIR__ . "/segis-village/output_geojsons/{$geo_id}.json"
        );
    }
}
