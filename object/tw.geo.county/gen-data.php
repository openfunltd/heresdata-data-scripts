<?php

$geojson_files = glob(__DIR__ . "/*.geojson");
// filename: {year}.zip.geojson
// sort by year
usort($geojson_files, function($a, $b) {
    return (int)basename($a, ".geojson") - (int)basename($b, ".geojson");
});

$object_output = fopen(__DIR__ . '/outputs/object.csv', 'w');
fputcsv($object_output, ['_id', '_version', 'COUNTY', 'COUNTY_ALIAS', 'COUNTY_ID', '_geo_id']);
$log_output = fopen(__DIR__ . '/outputs/log.csv', 'w');
fputcsv($log_output, ['_id', '_version', '_log', '_data']);
$geo_output = fopen(__DIR__ . '/outputs/geo.jsonl', 'w');


// 98.zip 最早
// 100.zip 五都改制
// 104.zip 桃園改制
// 2010-12-25 台北縣(10001) => 新北市(65000)
// 2010-12-25 台中縣(10006) + 台中市(10019) => 台中市(66000)
// 2010-12-25 台南縣(10011) + 台南市(10021) => 台南市(67000)
// 2010-12-25 高雄縣(10012) + 高雄市(64000) => 高雄市(64000)
// 2014-12-25 桃園縣(10003) => 桃園市(68000)
$objects = [];
foreach ($geojson_files as $idx => $geojson_file) {
    $is_first = $idx == 0;
    $is_last = $idx == count($geojson_files) - 1;

    error_log($geojson_file);
    $geojson = json_decode(file_get_contents($geojson_file));
    $year = intval(basename($geojson_file, ".geojson")) + 1911;
    if ($year == 2011) {
        $date = '2010-12-25';
    } else if ($year == 2015) {
        $date = '2014-12-25';
    } else if ($year == 2009) {
        $date = 0;
    }
    $features = $geojson->features;

    foreach ($features as $feature) {
        $properties = $feature->properties;
        $data = [];
        $meta = [];
        $data['COUNTY'] = $properties->COUNTY;
        $data['COUNTY_ALIAS'] = [];
        if (strpos($data['COUNTY'], '台') !== false) {
            $data['COUNTY_ALIAS'][] = str_replace('台', '臺', $data['COUNTY']);
        } elseif (strpos($data['COUNTY'], '臺') !== false) {
            $data['COUNTY_ALIAS'][] = str_replace('臺', '台', $data['COUNTY']);
        }
        $data['COUNTY_ID'] = $properties->COUNTY_ID;
        $query_county_id = $properties->COUNTY_ID;
        if ($properties->COUNTY_ID == 65000) { // 新北市 => 台北縣
            $query_county_id = 10001;
        } elseif ($properties->COUNTY_ID == 68000) { // 桃園市 => 桃園縣
            $query_county_id = 10003;
        } elseif ($properties->COUNTY_ID == 64000 and $year >= 2011) { // 高雄市 => 高雄縣
            $query_county_id = "64000-2";
        }

        if (!array_key_exists($query_county_id, $objects)) {
            $geo_id = "{$query_county_id}:{$date}";
            fputs($geo_output, json_encode([
                'type' => 'Feature',
                'geometry' => $feature->geometry,
                'properties' => ['geo_id' => $geo_id],
            ]) . "\n");

            $meta = [
                'valid' => true,
                'geo_id' => $geo_id,
            ];
            fputcsv($object_output, [
                $query_county_id,
                $date,
                $data['COUNTY'],
                implode(';', $data['COUNTY_ALIAS']),
                $data['COUNTY_ID'],
                $geo_id,
            ]);
            $objects[$query_county_id] = [
                'data' => $data,
                'meta' => $meta,
                'checked_year' => $year,
            ];

            if (!$is_first) {
                $log_data = [];
                if ($properties->COUNTY_ID == 67000) {
                    $log_data['message'] = "前臺南市與前臺南縣改制為臺南市";
                    $log_data['from'] = [10011, 10021];
                    $log_data['to'] = [67000];
                } elseif ($properties->COUNTY_ID == 66000) {
                    $log_data['message'] = "前臺中市與前臺中縣改制為臺中市";
                    $log_data['from'] = [10006, 10019];
                    $log_data['to'] = [66000];
                } elseif ($properties->COUNTY_ID == 64000) {
                    $log_data['message'] = "前高雄市與前高雄縣改制為高雄市";
                    $log_data['from'] = [64000];
                    $log_data['to'] = [64000];
                } else {
                    throw new Exception("TODO: 處理新增行政區 {$properties->COUNTY} ({$properties->COUNTY_ID})");
                }
                fputcsv($log_output, [
                    $query_county_id,
                    $date,
                    $log_data['message'],
                    json_encode([
                        'from' => $log_data['from'],
                        'to' => $log_data['to'],
                    ]),
                ]); 
            }
        }

        $changes = [];
        foreach ($data as $key => $value) {
            if ($objects[$query_county_id]['data'][$key] != $value) {
                $changes[$key] = ['data', $objects[$query_county_id]['data'][$key], $value];
            }
        }
        foreach ($meta as $key => $value) {
            if ($objects[$query_county_id]['meta'][$key] != $value) {
                $changes[$key] = ['meta', $objects[$query_county_id]['meta'][$key], $value];
            }
        }

        if (count($changes) > 0) {
            $change_map = [
                '65000' => [ // 新北市
                    '台北縣升格新北市', // 原因
                    [10001], // from
                    [65000], // to
                ],
                '68000' => [ // 桃園市
                    '桃園縣升格桃園市', // 原因
                    [10003], // from
                    [68000], // to
                ],
                '64000' => [ // 高雄市
                    '高雄縣升格高雄市', // 原因
                    [10012, 64000], // from
                    [64000], // to
                    true, // is_new_geometry
                ],
            ];
            if (array_key_exists($properties->COUNTY_ID, $change_map)) {
                $change_log = $change_map[$properties->COUNTY_ID];
                foreach ($changes as $key => $type_old_new) {
                    list($type, $old, $new) = $type_old_new;
                    if ($type == 'meta') {
                        $objects[$query_county_id]['meta'][$key] = $new;
                    } else {
                        $objects[$query_county_id]['data'][$key] = $new;
                    }
                }

                fputcsv($object_output, [
                    $query_county_id,
                    $date,
                    $data['COUNTY'],
                    implode(';', $data['COUNTY_ALIAS']),
                    $data['COUNTY_ID'],
                    $objects[$query_county_id]['meta']['geo_id'],
                ]);

                fputcsv($log_output, [
                    $query_county_id,
                    $date,
                    $change_log[0],
                    json_encode([
                        'from' => $change_log[1],
                        'to' => $change_log[2],
                    ]),
                ]);

            } else {
                print_r($changes);
                throw new Exception("TODO: 處理行政區變更 {$properties->COUNTY} ({$properties->COUNTY_ID})");
            }
        }
        $objects[$query_county_id]['checked_year'] = $year;
    }

    // 檢查失效的行政區
    foreach ($objects as $object_id => $object) {
        if (!$object['meta']['valid']) {
            continue;
        }
        if ($object['checked_year'] == $year) {
            continue;
        }
        $change_map = [
            '10012' => [ // 高雄縣
                '前高雄市與前高雄縣改制為高雄市', // 原因
                [10012, 64000], // from
                [64000], // to
            ],
            '64000' => [
                '前高雄市與前高雄縣改制為高雄市', // 原因
                [10012, 64000], // from
                [64000], // to
            ],
            '10021' => [ // 台南市
                '前臺南市與前臺南縣改制為臺南市', // 原因
                [10011, 10021], // from
                [67000], // to
            ],
            '10011' => [ // 台南縣
                '前臺南市與前臺南縣改制為臺南市', // 原因
                [10011, 10021], // from
                [67000], // to
            ],
            '10006' => [ // 台中縣
                '前臺中市與前臺中縣改制為臺中市', // 原因
                [10006, 10019], // from
                [66000], // to
            ],
            '10019' => [ // 台中市
                '前臺中市與前臺中縣改制為臺中市', // 原因
                [10006, 10019], // from
                [66000], // to
            ],
        ];
        if (array_key_exists($object['data']['COUNTY_ID'], $change_map)) {
            $change_log = $change_map[$object['data']['COUNTY_ID']];
            $objects[$object_id]['meta']['valid'] = false;
            fputcsv($log_output, [
                $object_id,
                $date,
                $change_log[0],
                json_encode([
                    'from' => $change_log[1],
                    'to' => $change_log[2],
                ]),
            ]);
        } else {
            print_r($object);
            throw new Exception("TODO: 處理行政區變更 {$object['data']['name']} ({$object['data']['id']})");
        }
    }
}
fclose($object_output);
fclose($log_output);
fclose($geo_output);
