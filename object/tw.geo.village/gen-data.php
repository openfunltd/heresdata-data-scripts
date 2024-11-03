<?php

// https://segis.moi.gov.tw/STATCloud/ViewDetail?messageid=4482
$date_mapping = [
    '2008M01',
    '2008M04',
    '2009M02',
    '2009M06',
    '2009M07',
    '2009M12',
    '2010M03',
    '2010M05',
    '2010M08',
    '2011M01',
    '2013M03',
    '2013M04',
    '2014M03',
    '2014M06',
    '2014M07',
    '2015M01',
    '2015M08',
    '2015M10',
    '2017M03',
    '2017M06',
    '2018M03',
    '2018M06',
    '2018M07',
    '2019M06',
    '2020M03',
    '2021M03',
    '2021M09',
    '2021M10',
    '2022M03',
    '2022M06',
    '2022M09',
    '2022M11',
    '2023M03',
    '2023M09',
    '2023M10',
    '2024M04',
];
$change_map = [
    '10012270-*-2008M04' => [
        'message' => '「高雄縣三民鄉」修改為「高雄縣那瑪夏鄉」',
        'log_at' => '2008-04-01',
    ],
    '10004100-*-2009M02' => [
        'message' => '新竹縣寶山鄉、新豐鄉村里有調整',
        'log_at' => '2009-02-01',
    ],
    '10004060-*-2009M02' => [
        'message' => '新竹縣寶山鄉、新豐鄉村里有調整',
        'log_at' => '2009-02-01',
    ],
    '10001100-*-2009M06' => [
        'message' => '臺北縣淡水鎮村里有調整',
        'log_at' => '2009-06-01',
    ],
    '10012260-*-2009M06' => [
        'message' => '高雄縣桃源鄉村里有調整',
        'log_at' => '2009-05-11',
    ],
    '64000110-*-2009M07' => [
        'message' => '高雄市小港區村里有調整',
        'log_at' => '2009-07-01',
        'disabled' => true,
    ],
    '10012080-*-2009M12' => [
        'message' => '高雄縣岡山鎮村里有調整',
        'log_at' => '2009-12-31',
        'disabled' => true,
    ],
    '10020010-*-2010M03' => [
        'message' => '澎湖縣馬公市；高雄市三民區；嘉義市東區、西區；苗栗縣竹南鎮、頭份鎮；桃園縣八德市村里有調整',
        'log_at' => '2010-02-01',
        'disabled' => true,
    ],
    '10020020-*-2010M03' => [
        'message' => '澎湖縣馬公市；高雄市三民區；嘉義市東區、西區；苗栗縣竹南鎮、頭份鎮；桃園縣八德市村里有調整',
        'log_at' => '2010-02-01',
        'disabled' => true,
    ],
    '10016010-*-2010M03' => [
        'message' => '澎湖縣馬公市；高雄市三民區；嘉義市東區、西區；苗栗縣竹南鎮、頭份鎮；桃園縣八德市村里有調整',
        'log_at' => '2010-02-01',
        'disabled' => true,
    ],
    '10005040-*-2010M03' => [
        'message' => '澎湖縣馬公市；高雄市三民區；嘉義市東區、西區；苗栗縣竹南鎮、頭份鎮；桃園縣八德市村里有調整',
        'log_at' => '2010-02-01',
    ],
    '10005050-*-2010M03' => [
        'message' => '澎湖縣馬公市；高雄市三民區；嘉義市東區、西區；苗栗縣竹南鎮、頭份鎮；桃園縣八德市村里有調整',
        'log_at' => '2010-02-01',
    ],
    '64000050-*-2010M03' => [
        'message' => '澎湖縣馬公市；高雄市三民區；嘉義市東區、西區；苗栗縣竹南鎮、頭份鎮；桃園縣八德市村里有調整',
        'log_at' => '2010-02-01',
        'disabled' => true,
    ],
    '10003020-*-2010M03' => [
        'message' => '桃園縣中壢市、楊梅鎮、八德市村里有調整。',
        'log_at' => '2010-01-01',
    ],
    '10003040-*-2010M03' => [
        'message' => '桃園縣中壢市、楊梅鎮、八德市村里有調整。',
        'log_at' => '2010-01-01',
    ],
    '10003080-*-2010M03' => [
        'message' => '桃園縣中壢市、楊梅鎮、八德市村里有調整。',
        'log_at' => '2010-01-01',
    ],
    '10001110-*-2010M03' => [
        'message' => '臺北縣汐止市、淡水鎮村里有調整',
        'log_at' => '2010-03-01',
    ],
    '10001100-*-2010M03' => [
        'message' => '臺北縣汐止市、淡水鎮村里有調整',
        'log_at' => '2010-03-01',
    ],
    '10001090-*-2010M05' => [
        'message' => '臺北縣三峽鎮村里有調整',
        'log_at' => '2010-05-03',
    ],
    '63000080-*-2010M08' => [
        'message' => '臺北市文山區、南港區、內湖區村里有調整',
        'log_at' => '2010-07-01',
    ],
    '63000090-*-2010M08' => [
        'message' => '臺北市文山區、南港區、內湖區村里有調整',
        'log_at' => '2010-07-01',
    ],
    '63000100-*-2010M08' => [
        'message' => '臺北市文山區、南港區、內湖區村里有調整',
        'log_at' => '2010-07-01',
    ],
    '10021010-*-2010M08' => [
        'message' => '臺南市東區村里有調整',
        'log_at' => '2010-07-27',
        'disabled' => true,
    ],
    '10003040-*-2010M08' => [
        'message' => '桃園縣「楊梅鎮」改制縣轄市為「楊梅市」',
        'log_at' => '2010-08-01',
    ],
    '65000*-*-2011M01' => [
        'message' => '臺北縣改制為新北市',
        'log_at' => '2010-12-25',
    ],
    '66000*-*-2011M01' => [
        'message' => '前臺中市與前臺中縣改制為臺中市',
        'log_at' => '2010-12-25',
    ],
    '67000*-*-2011M01' => [
        'message' => '前臺南市與前臺南縣改制為臺南市',
        'log_at' => '2010-12-25',
    ],
    '64000*-*-2011M01' => [
        'message' => '前高雄市與前高雄縣改制為高雄市',
        'log_at' => '2010-12-25',
    ],
    '10004010-*-2013M03' => [
        'message' => '新竹縣竹北市村里有調整',
        'log_at' => '2013-03-01',
    ],
    '10002030-*-2013M04' => [
        'message' => '宜蘭縣蘇澳鎮村里有調整',
        'log_at' => '2013-04-01',
        'disabled' => true,
    ],
    '10002010-*-2014M03' => [
        'message' => '宜蘭縣宜蘭市村里有調整',
        'log_at' => '2014-03-01',
        'disabled' => true,
    ],
    '10008130-*-2014M03' => [
        'message' => '桃園縣觀音鄉、蘆竹鄉；南投縣仁愛鄉村里有調整。',
        'log_at' => '2014-01-01',
    ],
    '10003120-*-2014M03' => [
        'message' => '桃園縣觀音鄉、蘆竹鄉；南投縣仁愛鄉村里有調整。',
        'log_at' => '2014-01-01',
    ],
    '10003050-*-2014M03' => [
        'message' => '桃園縣觀音鄉、蘆竹鄉；南投縣仁愛鄉村里有調整。',
        'log_at' => '2014-01-01',
        'disabled' => true,
    ],
    '10003050-*-2014M06' => [
        'message' => '桃園縣「蘆竹鄉」改制縣轄市為「蘆竹市」',
        'log_at' => '2014-06-03',
    ],
    '10018010-*-2014M07' => [
        'message' => '新竹市東區、北區；高雄市左營區、杉林區；雲林縣麥寮鄉村里有調整',
        'log_at' => '2014-07-01',
    ],
    '10018020-*-2014M07' => [
        'message' => '新竹市東區、北區；高雄市左營區、杉林區；雲林縣麥寮鄉村里有調整',
        'log_at' => '2014-07-01',
    ],
    '64000340-*-2014M07' => [
        'message' => '新竹市東區、北區；高雄市左營區、杉林區；雲林縣麥寮鄉村里有調整',
        'log_at' => '2014-07-01',
    ],
    '64000030-*-2014M07' => [
        'message' => '新竹市東區、北區；高雄市左營區、杉林區；雲林縣麥寮鄉村里有調整',
        'log_at' => '2014-07-01',
        'disabled' => true,
    ],
    '10009130-*-2014M07' => [
        'message' => '新竹市東區、北區；高雄市左營區、杉林區；雲林縣麥寮鄉村里有調整',
        'log_at' => '2014-07-01',
    ],
    '64000120-*-2014M07' => [
        'message' => '高雄市鳳山區村里有調整',
        'log_at' => '2014-07-25',
        'disabled' => true,
    ],
    '68000*-*-2015M01' => [
        'message' => '桃園縣改制為桃園市，鄉鎮市改制為區',
        'log_at' => '2014-12-25',
    ],
    '10007100-*-2015M08' => [
        'message' => '彰化縣「員林鎮」改制縣轄市為「員林市」',
        'log_at' => '2014-08-08',
    ],
    '10005050-*-2015M10' => [
        'message' => '苗栗縣「頭份鎮」改制縣轄市為「頭份市」',
        'log_at' => '2015-10-05',
    ],
    '10004010-*-2017M03' => [
        'message' => '新竹縣竹北市村里有調整',
        'log_at' => '2017-03-01',
    ],
    '10013030-*-2017M06' => [
        'message' => '刪除屏東縣東港鎮大鵬里',
        'log_at' => '2017-06-09',
        'disabled' => true,
    ],
    '68000*-*-2018M03' => [
        'message' => '桃園市村里有調整',
        'log_at' => '2018-03-01',
    ],
    '67000*-*-2018M03' => [
        'message' => '臺南市里鄰編組及調整案，辦理實施第一階段刪除及調整村里作業',
        'log_at' => '2018-01-29',
        'disabled' => true,
    ],
    '67000*-*-2018M06' => [
        'message' => '臺南市里鄰編組及調整案，辦理實施第二階段刪除及調整村里作業',
        'log_at' => '2018-04-30',
        'disabled' => true,
    ],
    '10005050-*-2018M06' => [
        'message' => '苗栗市頭份市村里有調整',
        'log_at' => '2018-04-01',
    ],
    '10009020-*-2018M06' => [
        'message' => '雲林縣斗南鎮、斗六市村里有調整',
        'log_at' => '2018-06-01',
    ],
    '10009010-*-2018M06' => [
        'message' => '雲林縣斗南鎮、斗六市村里有調整',
        'log_at' => '2018-06-01',
    ],
    '10015010-*-2018M07' => [
        'message' => '花蓮縣花蓮市刪除民治里',
        'log_at' => '2018-07-01',
        'disabled' => true,
    ],
    '64000050-*-2019M06' => [
        'message' => '高雄市三民區、鳳山區村里代碼有調整',
        'log_at' => '2019-06-01',
    ],
    '67000350-*-2021M03' => [
        'message' => '臺南市安南區、屏東縣瑪家鄉村里有調整',
        'log_at' => '2021-03-29',
    ],
    '10009010-*-2021M03' => [
        'message' => '雲林縣斗六市村里有調整',
        'log_at' => '2021-02-01',
    ],
    '67000350-*-2021M09' => [
        'message' => '臺南市安南區媽祖宮里代碼修正。',
        'log_at' => '2021-09-06',
    ],
    '10008130-017-2021M09' => [
        'message' => '南投縣仁愛鄉合作村更名為德鹿谷村; 南投縣仁愛鄉德鹿谷村代碼修正。',
        'log_at' => '2021-08-01',
    ],
    '10013030-*-2021M09' => [
        'message' => '屏東縣屏東市村里調整。',
        'log_at' => '2021-09-06',
        'disabled' => true,
    ],
    '10013010-*-2021M09' => [
        'message' => '屏東縣屏東市村里調整。',
        'log_at' => '2021-09-06',
        'disabled' => true,
    ],
    '10014010-*-2021M10' => [
        'message' => '臺東縣臺東市部分里界調整。',
        'log_at' => '2021-10-17',
        'disabled' => true,
    ],
    '10015040-*-2021M10' => [
        'message' => '花蓮縣新城鄉北埔村劃分為北埔村及新秀村。',
        'log_at' => '2021-10-01',
    ],
    '10007220-*-2022M03' => [
        'message' => '彰化縣埤頭鄉永豊村更名為永豐村',
        'log_at' => '2022-01-01',
    ],
    '67000290-*-2022M03' => [
        'message' => '臺南市關廟區南雄里更名為龜洞里',
        'log_at' => '2022-01-01',
        'disabled' => true,
    ],
    '68000090-*-2022M03' => [
        'message' => '桃園市有五區新增村里。',
        'log_at' => '2022-03-01',
    ],
    '68000080-*-2022M03' => [
        'message' => '桃園市有五區新增村里。',
        'log_at' => '2022-03-01',
    ],
    '68000020-*-2022M03' => [
        'message' => '桃園市有五區新增村里。',
        'log_at' => '2022-03-01',
    ],
    '68000010-*-2022M03' => [
        'message' => '桃園市有五區新增村里。',
        'log_at' => '2022-03-01',
    ],
    '68000060-*-2022M03' => [
        'message' => '桃園市有五區新增村里。',
        'log_at' => '2022-03-01',
    ],
    '10007020-*-2022M06' => [
        'message' => '彰化縣鹿港鎮頂厝里，新增鹿和里及鹿東里。',
        'log_at' => '2022-05-16',
    ],
    '64000140-*-2022M06' => [
        'message' => '高雄市大寮區光武里併入忠義里，刪除光武里。',
        'log_at' => '2022-06-01',
        'disabled' => true,
    ],
    '68000100-*-2022M09' => [
        'message' => '桃園市桃園區、平鎮區村里界釐整。',
        'log_at' => '2022-09-19',
    ],
    '68000010-*-2022M09' => [
        'message' => '桃園市桃園區、平鎮區村里界釐整。',
        'log_at' => '2022-09-19',
    ],
    '10008120-*-2022M09' => [
        'message' => '南投縣信義鄉望美村劃分為望美村及卡里布安村，新增卡里布安村。',
        'log_at' => '2022-07-01',
    ],
    '10009020-*-2022M11' => [
        'message' => '雲林縣斗南鎮東仁里、南昌里、北銘里、舊社里、林子里、阿丹里、將軍里等村里界釐整',
        'log_at' => '2022-11-29',
    ],
    '63000100-*-2022M11' => [
        'message' => '臺北市內湖區石潭里及蘆洲里村里界釐整',
        'log_at' => '2022-11-29',
    ],
    '63000090-*-2022M11' => [
        'message' => '臺北市南港區西新里及重陽里村里界釐整',
        'log_at' => '2022-11-29',
    ],
    '10010140-*-2023M03' => [
        'message' => '嘉義縣竹崎鄉村里界釐整。',
        'log_at' => '2023-01-01',
    ],
    '66000250-*-2023M03' => [
        'message' => '因應臺中市龍井區村里界釐整。',
        'log_at' => '2023-03-24',
    ],
    '10014060-*-2023M09' => [
        'message' => '因應高雄市美濃區與臺東縣池上鄉村里界釐整。',
        'log_at' => '2023-09-11',
    ],
    '64000310-*-2023M09' => [
        'message' => '因應高雄市美濃區與臺東縣池上鄉村里界釐整。',
        'log_at' => '2023-09-11',
    ],
    '64000380-*-2023M10' => [
        'message' => '因應高雄市那瑪夏區村里界釐整。',
        'log_at' => '2023-10-13',
    ],
    '64000100-*-2024M04' => [
        'message' => '因應高雄市旗津區中興里村里界釐整。',
        'log_at' => '2024-04-19',
    ],
];

$object_output = fopen(__DIR__ . '/outputs/object.csv', 'w');
fputcsv($object_output, [
    '_id', '_version',
    'COUNTY_ID', 'TOWN_ID', 'VILLAGE_ID', 'V_ID',
    'COUNTY', 'TOWN', 'VILLAGE',
    'VILLAGE_ALIAS',
    'NAME',
    '_geo_id',
]);

$output_objects = function($id, $version, $object) use ($object_output) {
    if (is_null($object)) {
        fputcsv($object_output, [
            $id, $version,
            '', '', '', '',
            '', '', '',
            '',
            '',
            '',
        ]);
    } else {
        fputcsv($object_output, [
            $id, $version,
            $object['data']['COUNTY_ID'], $object['data']['TOWN_ID'], $object['data']['VILLAGE_ID'], $object['data']['V_ID'],
            $object['data']['COUNTY'], $object['data']['TOWN'], $object['data']['VILLAGE'],
            implode(';', $object['data']['VILLAGE_ALIAS']),
            $object['data']['COUNTY'] . $object['data']['TOWN'] . $object['data']['VILLAGE'],
            $object['meta']['geo_id'],
        ]);
    }
};

$log_output = fopen(__DIR__ . '/outputs/log.csv', 'w');
fputcsv($log_output, ['_id', '_version', '_log', '_data']);

$objects = [];
$geometries = [];
$townid_name_map = [];
$countyid_name_map = [];
foreach ($date_mapping as $idx => $year) {
    $geojson_file = __DIR__ . "/geojsons/G97_TW_U01VI_{$year}.geojson.gz";

    $is_first = $idx == 0;
    $is_last = ($idx + 1) == count($date_mapping);

    error_log($geojson_file);
    $geojson = json_decode(file_get_contents('compress.zlib://' . $geojson_file));
    list($y, $m) = explode('M', $year);
    if ($is_first) {
        $date = 0;
    } else {
        $date = "{$y}-{$m}-01";
    }
    $features = $geojson->features;

    $disabled_object = [];
    foreach ($features as $feature) {
        // [COUNTY] => 高雄縣
        // [TOWN] => 六龜鄉
        // [COUNTY_ID] => 10012
        // [TOWN_ID] => 10012210
        $properties = $feature->properties;
        $data = [];
        $meta = [];
        if (is_null($properties->V_ID)) {
            continue;
        }
        if (!preg_match('#^\d\d\d$#', $properties->VILLAGE_ID)) {
            // Ex: 10013030-S01
            continue;
        }
        // fix segis data
        if (in_array($year, ['2017M06', '2017M03', '2018M03', '2018M06', '2018M07']) and $properties->V_ID == '10004010-031') {
            $properties->VILLAGE_ID = '031';
        } elseif (strpos($properties->V_ID, '64000051') === 0) {
            $properties->V_ID = str_replace('64000051', '64000050', $properties->V_ID);
        } elseif (strpos($properties->V_ID, '64000052') === 0) {
            $properties->V_ID = str_replace('64000052', '64000050', $properties->V_ID);
        } elseif (strpos($properties->V_ID, '64000121') === 0) {
            $properties->V_ID = str_replace('64000121', '64000120', $properties->V_ID);
        } elseif (strpos($properties->V_ID, '64000122') === 0) {
            $properties->V_ID = str_replace('64000122', '64000120', $properties->V_ID);
        }

        // G97_TW_U01VI_2019M06.geojson.gz 有 V_ID 跟 TOWN_ID, VILLAGE_ID 不一致的情況
        if  ($properties->V_ID != "{$properties->TOWN_ID}-{$properties->VILLAGE_ID}") {
            error_log(json_encode($properties, JSON_UNESCAPED_UNICODE));
            throw new Exception("{$year} {$properties->V_ID} != {$properties->TOWN_ID}-{$properties->VILLAGE_ID}");
        }
        foreach (['COUNTY', 'TOWN', 'VILLAGE', 'COUNTY_ID', 'TOWN_ID', 'VILLAGE_ID', 'V_ID'] as $k) {
            $data[$k] = $properties->$k;
        }

        $data['VILLAGE_ALIAS'] = [];
        // 處理特殊村里名稱
        if ($data['V_ID'] == '65000070-007') {
            $data['VILLAGE'] = '蜣寮里';
        } elseif (in_array($data['V_ID'], [
            '10004020-006',
        ])) {
            $data['VILLAGE'] = '上舘村';
            $data['VILLAGE_ALIAS'] = ['上館村'];
        } elseif (in_array($data['V_ID'], [
            '10004020-012',
        ])) {
            $data['VILLAGE'] = '鷄林里';
            $data['VILLAGE_ALIAS'] = ['雞林里'];
        } elseif (in_array($data['V_ID'], [
            '10005020-014',
            '10011180-016',
        ])) {
            $data['VILLAGE'] = '山脚里';
            $data['VILLAGE_ALIAS'] = ['山腳里'];
        } elseif (in_array($data['V_ID'], [
            '10007150-020',
        ])) {
            $data['VILLAGE'] = '埤脚村';
            $data['VILLAGE_ALIAS'] = ['埤腳村'];
        } elseif (in_array($data['V_ID'], [
            '10001280-008',
        ])) {
            $data['VILLAGE'] = '崁脚村';
            $data['VILLAGE_ALIAS'] = ['崁腳村'];
        } elseif (in_array($data['V_ID'], [
            '65000280-008',
        ])) {
            $data['VILLAGE'] = '崁脚里';
            $data['VILLAGE_ALIAS'] = ['崁腳里'];
        } elseif (in_array($data['V_ID'], [
            '67000180-016',
        ])) {
            $data['VILLAGE'] = '山脚里';
            $data['VILLAGE_ALIAS'] = ['山腳里'];
        } elseif (in_array($data['V_ID'], [
            '10005020-021',
        ])) {
            $data['VILLAGE'] = '上舘里';
            $data['VILLAGE_ALIAS'] = ['上館里'];
        } elseif (in_array($data['V_ID'], [
            '10004090-004',
        ])) {
            $data['VILLAGE'] = '水磜村';
        } elseif (in_array($data['V_ID'], [
            '10007180-002',
        ])) {
            $data['VILLAGE'] = '上豊村';
            $data['VILLAGE_ALIAS'] = ['上豐村'];
        } elseif (in_array($data['V_ID'], [
            '67000310-029',
            '10011310-029',
        ])) {
            $data['VILLAGE'] = '塩洲里';
            $data['VILLAGE_ALIAS'] = ['鹽洲里'];
        } elseif (in_array($data['V_ID'], [
            '67000150-007',
            '10011150-007',
        ])) {
            $data['VILLAGE'] = '塩埕里';
            $data['VILLAGE_ALIAS'] = ['鹽埕里'];
        } elseif (in_array($data['V_ID'], [
            '67000350-019',
            '10021060-019',
        ])) {
            $data['VILLAGE'] = '塩田里';
            $data['VILLAGE_ALIAS'] = ['鹽田里', '塭田里'];
        } elseif (in_array($data['V_ID'], [
            '67000310-043',
        ])) {
            $data['VILLAGE'] = '塩興里';
            $data['VILLAGE_ALIAS'] = ['鹽興里'];
        } elseif (in_array($data['V_ID'], [
            '67000310-010',
            '10011310-010',
        ])) {
            $data['VILLAGE'] = '塩行里';
            $data['VILLAGE_ALIAS'] = ['鹽行里'];
        } elseif (in_array($data['V_ID'], [
            '67000180-018',
        ])) {
            $data['VILLAGE'] = '那拔里';
        } elseif (in_array($data['V_ID'], [
            '10001010-021',
            '65000010-021',
            '10019040-013',
            '10005040-018',
            '66000040-009',
            '10009040-027',
            '10009060-011',
            '64000250-004',
        ])) {
            $data['VILLAGE'] = '公舘里';
            $data['VILLAGE_ALIAS'] = ['公館里'];
        } elseif (in_array($data['V_ID'], [
            '10014110-001',
            '10012140-004',
        ])) {
            $data['VILLAGE'] = '公舘村';
            $data['VILLAGE_ALIAS'] = ['公館村'];
        } elseif (in_array($data['V_ID'], [
            '10007150-012',
        ])) {
            $data['VILLAGE'] = '舊舘村';
            $data['VILLAGE_ALIAS'] = ['舊館村'];
        } elseif (in_array($data['V_ID'], [
            '10007150-013',
        ])) {
            $data['VILLAGE'] = '南舘村';
            $data['VILLAGE_ALIAS'] = ['南館村'];
        } elseif (in_array($data['V_ID'], [
            '10007150-014',
        ])) {
            $data['VILLAGE'] = '新舘村';
            $data['VILLAGE_ALIAS'] = ['新館村'];
        } elseif (in_array($data['V_ID'], [
            '66000080-013',
            '10019080-013',
            '66000210-011',
            '10006130-011',
        ])) {
            $data['VILLAGE'] = '廍子里';
            $data['VILLAGE_ALIAS'] = ['廓子里', '部子里'];
        } elseif (in_array($data['V_ID'], [
            '10006130-011',
            '10007140-003',
        ])) {
            $data['VILLAGE'] = '廍子村';
            $data['VILLAGE_ALIAS'] = ['廓子村', '部子村'];
        } elseif (in_array($data['V_ID'], [
            '10006160-016',
        ])) {
            $data['VILLAGE'] = '蔗廍村';
            $data['VILLAGE_ALIAS'] = ['蔗廓村', '蔗部村'];
        } elseif (in_array($data['V_ID'], [
            '10011050-017',
        ])) {
            $data['VILLAGE'] = '後廍村';
            $data['VILLAGE_ALIAS'] = ['後廓村', '後部村'];
        } elseif (in_array($data['V_ID'], [
            '10011100-008',
        ])) {
            $data['VILLAGE'] = '南廍村';
            $data['VILLAGE_ALIAS'] = ['南廓村', '南部村'];
        } elseif (in_array($data['V_ID'], [
            '67000100-008',
        ])) {
            $data['VILLAGE'] = '南廍里';
            $data['VILLAGE_ALIAS'] = ['南廓里', '南部里'];
        } elseif (in_array($data['V_ID'], [
            '67000070-015',
            '10011070-015',
        ])) {
            $data['VILLAGE'] = '寮廍里';
            $data['VILLAGE_ALIAS'] = ['寮廓里', '寮部里'];
        } elseif (in_array($data['V_ID'], [
            '67000010-022',
            '10011010-022',
        ])) {
            $data['VILLAGE'] = '舊廍里';
            $data['VILLAGE_ALIAS'] = ['舊廓里', '舊部里'];
        } elseif (in_array($data['V_ID'], [
            '67000050-016',
        ])) {
            $data['VILLAGE'] = '後廍里';
            $data['VILLAGE_ALIAS'] = ['後廓里', '後部里'];
        } elseif (in_array($data['V_ID'], [
            '63000070-015',
        ])) {
            $data['VILLAGE'] = '糖廍里';
            $data['VILLAGE_ALIAS'] = ['糖廓里', '糖部里', '糖蔀里'];
        } elseif (in_array($data['V_ID'], [
            '10007010-002',
            '10013030-017',
        ])) {
            $data['VILLAGE'] = '下廍里';
            $data['VILLAGE_ALIAS'] = ['下廓里', '下部里'];
        } elseif (in_array($data['V_ID'], [
            '66000240-016',
        ])) {
            $data['VILLAGE'] = '蔗廍里';
            $data['VILLAGE_ALIAS'] = ['蔗廓里'];
        } elseif (in_array($data['V_ID'], [
            '10006140-004',
        ])) {
            $data['VILLAGE'] = '龜壳村';
            $data['VILLAGE_ALIAS'] = ['龜殼村'];
        } elseif (in_array($data['V_ID'], [
            '66000220-004',
        ])) {
            $data['VILLAGE'] = '龜壳里';
            $data['VILLAGE_ALIAS'] = ['龜殼里'];
        } elseif (in_array($data['V_ID'], [
            '66000040-024',
            '10019040-034',
        ])) {
            $data['VILLAGE'] = '双龍里';
            $data['VILLAGE_ALIAS'] = ['雙龍里'];
        } elseif (in_array($data['V_ID'], [
            '10005130-002',
        ])) {
            $data['VILLAGE'] = '双湖村';
            $data['VILLAGE_ALIAS'] = ['雙湖村'];
        } elseif (in_array($data['V_ID'], [
            '10005130-003',
        ])) {
            $data['VILLAGE'] = '双潭村';
            $data['VILLAGE_ALIAS'] = ['雙潭村'];
        } elseif (in_array($data['V_ID'], [
            '10010050-023',
        ])) {
            $data['VILLAGE'] = '双福村';
            $data['VILLAGE_ALIAS'] = ['雙福村'];
        } elseif (in_array($data['V_ID'], [
            '10010020-012',
        ])) {
            $data['VILLAGE'] = '双溪里';
            $data['VILLAGE_ALIAS'] = ['雙溪里'];
        } elseif (in_array($data['V_ID'], [
            '10010150-010',
        ])) {
            $data['VILLAGE'] = '双溪村';
            $data['VILLAGE_ALIAS'] = ['雙溪村'];
        } elseif (in_array($data['V_ID'], [
            '10001090-006',
            '65000090-006',
        ])) {
            $data['VILLAGE'] = '永舘里';
            $data['VILLAGE_ALIAS'] = ['永館里'];
        } elseif (in_array($data['V_ID'], [
            '10010130-002',
        ])) {
            $data['VILLAGE'] = '塩舘村';
            $data['VILLAGE_ALIAS'] = ['塩館村'];
        } elseif (in_array($data['V_ID'], [
            '10010130-014',
        ])) {
            $data['VILLAGE'] = '石硦村';
            $data['VILLAGE_ALIAS'] = ['石哢村'];
        } elseif (in_array($data['V_ID'], [
            '10009130-003',
            '10007140-010',
            '10009170-018',
            '10013170-001'
        ])) {
            $data['VILLAGE'] = '瓦磘村';
            $data['VILLAGE_ALIAS'] = ['瓦嗂村', '瓦瑤村'];
        } elseif (in_array($data['V_ID'], [
            '65000030-017',
            '10001030-017',
        ])) {
            $data['VILLAGE'] = '瓦磘里';
            $data['VILLAGE_ALIAS'] = ['瓦嗂里', '瓦瑤里'];
        } elseif (in_array($data['V_ID'], [
            '65000030-054',
            '10001030-054',
        ])) {
            $data['VILLAGE'] = '灰磘里';
            $data['VILLAGE_ALIAS'] = ['灰嗂里', '灰瑤里'];
        } elseif (in_array($data['V_ID'], [
            '10007010-030',
            '10020020-018',
        ])) {
            $data['VILLAGE'] = '磚磘里';
            $data['VILLAGE_ALIAS'] = ['磚嗂里', '磚瑤里'];
        } elseif (in_array($data['V_ID'], [
            '10007010-039',
        ])) {
            $data['VILLAGE'] = '南瑶里';
            $data['VILLAGE_ALIAS'] = ['南嗂里', '南瑤里', '南磘里'];
        } elseif (in_array($data['V_ID'], [
            '10008040-005',
        ])) {
            $data['VILLAGE'] = '硘磘里';
            $data['VILLAGE_ALIAS'] = ['洄嗂里', '洄瑤里', '洄磘里', '洄瑶里'];
        } elseif (in_array($data['V_ID'], [
            '65000040-045',
            '10001040-045',
        ])) {
            $data['VILLAGE'] = '新廍里';
            $data['VILLAGE_ALIAS'] = ['新廓里', '新部里'];
        } elseif (in_array($data['V_ID'], [
            '10013090-012',
        ])) {
            $data['VILLAGE'] = '三廍村';
            $data['VILLAGE_ALIAS'] = ['三廓村', '三部村'];
        } elseif (in_array($data['V_ID'], [
            '10007230-013',
        ])) {
            $data['VILLAGE'] = '頂廍村';
            $data['VILLAGE_ALIAS'] = ['頂廓村', '頂部村'];
        } elseif (in_array($data['V_ID'], [
            '67000120-014',
            '10011120-014',
        ])) {
            $data['VILLAGE'] = '頂廍里';
            $data['VILLAGE_ALIAS'] = ['頂廓里', '頂部里'];
        } elseif (in_array($data['V_ID'], [
            '10008060-012',
        ])) {
            $data['VILLAGE'] = '廍下村';
            $data['VILLAGE_ALIAS'] = ['廓下村', '部下村'];
        } elseif (in_array($data['V_ID'], [
            '64000030-028',
        ])) {
            $data['VILLAGE'] = '廍南里';
            $data['VILLAGE_ALIAS'] = ['廓南里', '部南里'];
        } elseif (in_array($data['V_ID'], [
            '64000030-027',
        ])) {
            $data['VILLAGE'] = '廍北里';
            $data['VILLAGE_ALIAS'] = ['廓北里', '部北里'];
        } elseif (in_array($data['V_ID'], [
            '10007100-030',
        ])) {
            $data['VILLAGE'] = '大峯里';
            $data['VILLAGE_ALIAS'] = ['大峰里'];
        } elseif (in_array($data['V_ID'], [
            '65000120-007',
            '10001120-007',
        ])) {
            $data['VILLAGE'] = '爪峯里';
            $data['VILLAGE_ALIAS'] = ['爪峰里'];
        } elseif (in_array($data['V_ID'], [
            '10013190-007',
        ])) {
            $data['VILLAGE'] = '崎峯村';
            $data['VILLAGE_ALIAS'] = ['崎峰村'];
        } elseif (in_array($data['V_ID'], [
            '10010140-018',
        ])) {
            $data['VILLAGE'] = '文峯村';
            $data['VILLAGE_ALIAS'] = ['文峰村'];
        } elseif (in_array($data['V_ID'], [
            '10010150-015',
        ])) {
            $data['VILLAGE'] = '瑞峯村';
            $data['VILLAGE_ALIAS'] = ['瑞峰村'];
        } elseif (in_array($data['V_ID'], [
            '10009010-018',
        ])) {
            $data['VILLAGE'] = '崙峯里';
            $data['VILLAGE_ALIAS'] = ['崙峰里'];
        } elseif (in_array($data['V_ID'], [
            '10012120-003',
        ])) {
            $data['VILLAGE'] = '峯山村';
            $data['VILLAGE_ALIAS'] = ['峰山村'];
        } elseif (in_array($data['V_ID'], [
            '64000230-003',
        ])) {
            $data['VILLAGE'] = '峯山里';
            $data['VILLAGE_ALIAS'] = ['峰山里'];
        } elseif (in_array($data['V_ID'], [
            '65000060-041',
            '10001060-041',
        ])) {
            $data['VILLAGE'] = '五峯里';
            $data['VILLAGE_ALIAS'] = ['五峰里'];
        } elseif (in_array($data['V_ID'], [
            '10011220-005',
        ])) {
            $data['VILLAGE'] = '玉峯村';
            $data['VILLAGE_ALIAS'] = ['玉峰村'];
        } elseif (in_array($data['V_ID'], [
            '67000220-005',
        ])) {
            $data['VILLAGE'] = '玉峯里';
            $data['VILLAGE_ALIAS'] = ['玉峰里'];
        } elseif (in_array($data['V_ID'], [
            '65000130-017',
            '10001130-017',
        ])) {
            $data['VILLAGE'] = '峯廷里';
            $data['VILLAGE_ALIAS'] = ['峰廷里'];
        } elseif (in_array($data['V_ID'], [
            '10014150-001',
        ])) {
            $data['VILLAGE'] = '台坂村';
            $data['VILLAGE_ALIAS'] = ['台阪村'];
        } elseif (in_array($data['V_ID'], [
            '10014150-002',
        ])) {
            $data['VILLAGE'] = '土坂村';
            $data['VILLAGE_ALIAS'] = ['土阪村'];
        } elseif (in_array($data['V_ID'], [
            '65000200-004',
            '67000300-008',
        ])) {
            $data['VILLAGE'] = '石𥕢里';
            $data['VILLAGE_ALIAS'] = ['石曹里', '石嘈里'];
        } elseif (in_array($data['V_ID'], [
            '10001200-004',
            '10011300-008',
        ])) {
            $data['VILLAGE'] = '石𥕢村';
            $data['VILLAGE_ALIAS'] = ['石曹村', '石嘈村'];
        } elseif (in_array($data['V_ID'], [
            '10007010-059',
        ])) {
            $data['VILLAGE'] = '寶廍里';
            $data['VILLAGE_ALIAS'] = ['寶廓里', '寶部里'];
        } elseif (in_array($data['V_ID'], [
            '65000120-027',
        ])) {
            $data['VILLAGE'] = '濂新里';
        } elseif (in_array($data['V_ID'], [
            '65000120-028',
        ])) {
            $data['VILLAGE'] = '濂洞里';
        } elseif (in_array($data['V_ID'], [
            '67000350-003',
        ])) {
            $data['VILLAGE'] = '塭南里';
        } elseif (in_array($data['V_ID'], [
            '67000350-024',
        ])) {
            $data['VILLAGE'] = '公塭里';
        } elseif (in_array($data['V_ID'], [
            '66000120-016',
            '10006040-016',
            '67000150-020',
            '68000110-020',
        ])) {
            $data['VILLAGE'] = '槺榔里';
            $data['VILLAGE_ALIAS'] = ['糠榔里'];
        } elseif (in_array($data['V_ID'], [
            '10003110-020',
            '10011150-020',
        ])) {
            $data['VILLAGE'] = '槺榔村';
            $data['VILLAGE_ALIAS'] = ['糠榔村'];
        } elseif (in_array($data['V_ID'], [
            '10009180-016',
        ])) {
            $data['VILLAGE'] = '萡子村';
            $data['VILLAGE_ALIAS'] = ['箔子村'];
        } elseif (in_array($data['V_ID'], [
            '10009180-021',
        ])) {
            $data['VILLAGE'] = '萡東村';
            $data['VILLAGE_ALIAS'] = ['箔東村'];
        } elseif (in_array($data['V_ID'], [
            '10009200-021',
        ])) {
            $data['VILLAGE'] = '瓊埔村';
        } elseif (in_array($data['V_ID'], [
            '10013050-012',
        ])) {
            $data['VILLAGE'] = '厦北村';
            $data['VILLAGE_ALIAS'] = ['廈北村'];
        } elseif (in_array($data['V_ID'], [
            '10013050-013',
        ])) {
            $data['VILLAGE'] = '厦南村';
            $data['VILLAGE_ALIAS'] = ['廈南村'];
        } elseif (in_array($data['V_ID'], [
            '10013240-005',
        ])) {
            $data['VILLAGE'] = '響林村';
            $data['VILLAGE_ALIAS'] = ['响林村'];
        } elseif (in_array($data['V_ID'], [
            '10013280-003',
        ])) {
            $data['VILLAGE'] = '凉山村';
            $data['VILLAGE_ALIAS'] = ['涼山村'];
        } elseif (in_array($data['V_ID'], [
            '10014030-005',
        ])) {
            $data['VILLAGE'] = '里壠里';
            $data['VILLAGE_ALIAS'] = ['里壟里'];
        } elseif (in_array($data['V_ID'], [
            '63000020-019',
        ])) {
            $data['VILLAGE'] = '富台里';
            $data['VILLAGE_ALIAS'] = ['富臺里'];
        } elseif (in_array($data['V_ID'], [
            '10003060-011',
        ])) {
            $data['VILLAGE'] = '菓林村';
            $data['VILLAGE_ALIAS'] = ['果林村'];
        } elseif (in_array($data['V_ID'], [
            '68000060-011',
        ])) {
            $data['VILLAGE'] = '菓林里';
            $data['VILLAGE_ALIAS'] = ['果林里'];
        } elseif (in_array($data['V_ID'], [
            '67000070-004',
            '10011070-004',
        ])) {
            $data['VILLAGE'] = '晋江里';
            $data['VILLAGE_ALIAS'] = ['晉江里'];
        } elseif (in_array($data['V_ID'], [
            '09007020-005',
        ])) {
            $data['VILLAGE'] = '坂里村';
        } elseif (in_array($data['V_ID'], [
            '10016010-031',
        ])) {
            $data['VILLAGE'] = '嵵裡里';
        } elseif (in_array($data['V_ID'], [
            '10016020-022',
        ])) {
            $data['VILLAGE'] = '菓葉村';
            $data['VILLAGE_ALIAS'] = ['果葉村'];
        } elseif (in_array($data['V_ID'], [
            '64000180-004',
        ])) {
            $data['VILLAGE'] = '坔埔里';
            $data['VILLAGE_ALIAS'] = ['圣埔里'];
        } elseif (in_array($data['V_ID'], [
            '67000020-033',
        ])) {
            $data['VILLAGE'] = '坔頭港里';
            $data['VILLAGE_ALIAS'] = ['圣頭港里'];
        } elseif (in_array($data['V_ID'], [
            '10012070-004',
        ])) {
            $data['VILLAGE'] = '坔埔村';
            $data['VILLAGE_ALIAS'] = ['圣埔村'];
        } elseif (in_array($data['V_ID'], [
            '67000140-004',
        ])) {
            $data['VILLAGE'] = '檨林里';
        }
        if (strpos($data['VILLAGE'], '?') !== false) {
            throw new Exception("{$data['V_ID']} {$data['COUNTY']}{$data['TOWN']}{$data['VILLAGE']} has ?");
        }

        $townid_name_map["{$data['TOWN_ID']}-" . mb_substr($data['VILLAGE'], 0, -1)] = $data['V_ID'];
        $countyid_name_map["{$data['COUNTY_ID']}-" . mb_substr($data['TOWN'], 0, -1)] = $data['V_ID'];

        $data['NAME'] = $properties->COUNTY . $properties->TOWN . $data['VILLAGE'];

        $query_id = $data['V_ID'];
        $upgrade_year = null;
        if ($data['V_ID'] == '67000350-052') {
            // 臺南市安平區顯宮里 => 臺南市安平區媽祖宮里
            $query_id = '10021060-034';
        } else if ($data['V_ID'] == '10008130-017') {
            // 南投縣仁愛鄉合作村更名為德鹿谷村
            // 南投縣仁愛鄉德鹿谷村代碼修正
            $query_id = '10008130-007';
        } else if ($data['V_ID'] == '10007220-018') {
            // 彰化縣埤頭鄉永豊村 => 彰化縣埤頭鄉永豐村
            $query_id = '10007220-006';
        } else if ($data['COUNTY_ID'] == '65000' and $year >= '2011M01') {
            if ($data['TOWN_ID'] == '65000070' and $data['VILLAGE_ID'] >= 21) { // and $data['VILLAGE_ID'] <= 26) {
                // query_id=10001070-022: 新北市樹林區樂山里65000070-021 => 臺北縣樹林市樂山里10001070-022
                // query_id=10001070-023: 新北市樹林區東園里65000070-022 => 臺北縣樹林市東園里10001070-023
                $query_id = '10001070-' . sprintf("%03d", $data['VILLAGE_ID'] + 1);
            } elseif ($data['TOWN_ID'] == '65000050' and $data['VILLAGE_ID'] >= 30) {
                $query_id = '10001050-' . sprintf("%03d", $data['VILLAGE_ID'] + 1);
            } elseif ($data['TOWN_ID'] == '65000190' and $data['VILLAGE_ID'] >= 11) {
                // 新北市石碇區永安里 (65000190-011)
                $query_id = '10001190-' . sprintf("%03d", $data['VILLAGE_ID'] + 1);

            } else {
                $query_id = str_Replace('65000', '10001', $query_id);
            }

            $upgrade_year = '2011M01';
        } else if ($data['COUNTY_ID'] == '67000' and $year >= '2011M01') {
            // 前臺南市與前臺南縣改制為臺南市
            $town_suffix = intval(substr($data['TOWN_ID'], 5));
            if (in_array($data['V_ID'], [
                '67000290-020', // 臺南市關廟區龜洞里 2022M03
                '67000050-022', // 臺南市後壁區長短樹里 2018M06
                '67000050-023', // 臺南市後壁區上茄苳里 2018M06
                '67000050-024', // 臺南市後壁區菁豐里 2018M06
                '67000330-040', // 臺南市南區鹽埕里 2018M06
                '67000340-044', // 臺南市北區長勝里 2018M06
                '67000340-045', // 臺南市北區合興里 2018M06
                '67000340-046', // 臺南市北區北門里 2018M06
                '67000340-047', // 臺南市北區小北里 2018M06
                '67000340-048', // 臺南市北區大光里 2018M06
                '67000340-049', // 臺南市北區大興里 2018M06
                '67000340-050', // 臺南市北區長興里 2018M06
                '67000340-051', // 臺南市北區北華里 2018M06
                '67000340-052', // 臺南市北區華德里 2018M06
                '67000340-053', // 臺南市北區福德里 2018M06
                '67000340-054', // 臺南市北區立人里 2018M06
                '67000340-055', // 臺南市北區雙安里 2018M06
                '67000340-056', // 臺南市北區元美里 2018M06
                '67000360-016', // 臺南市安平區天妃里 2018M06
                '67000360-017', // 臺南市安平區王城里 2018M06
            ])) {
                // 新增的里，不需要對回去舊版
                $query_id = $data['V_ID'];
            } elseif ($town_suffix <= 310) {
                $query_id = sprintf("%05d%03d-%03d", 10011, $town_suffix, $data['VILLAGE_ID']);
            } else {
                $town_name = mb_substr($data['TOWN'], 0, -1);
                if (array_key_exists("10021-{$town_name}", $countyid_name_map)) {
                    $query_id = sprintf("%08d-%03d", $countyid_name_map["10021-{$town_name}"], $data['VILLAGE_ID']);
                } else {
                    $query_id = sprintf("%05d%03d-%03d", 10011, $town_suffix - 310, $data['VILLAGE_ID']);
                }
            }
            // 處理村里代碼變更
            $town_id = explode('-', $query_id)[0];
            $village_name = mb_substr($data['VILLAGE'], 0, -1);
            if (array_key_exists("{$town_id}-{$village_name}", $townid_name_map)) {
                $query_id = $townid_name_map["{$town_id}-{$village_name}"];
            }
        } else if ($data['COUNTY_ID'] == '68000' and $year >= '2015M01') {
            // 桃園縣改制為桃園市，鄉鎮市改制為區
            $town_suffix = intval(substr($data['TOWN_ID'], 5));
            $town_name = mb_substr($data['TOWN'], 0, -1);

            if (array_key_exists("10003-{$town_name}", $countyid_name_map)) {
                $query_id = sprintf("%08d-%03d", $countyid_name_map["10003-{$town_name}"], $data['VILLAGE_ID']);
            }
            // 處理村里代碼變更
            $town_id = explode('-', $query_id)[0];
            $village_name = mb_substr($data['VILLAGE'], 0, -1);
            if (array_key_exists("{$town_id}-{$village_name}", $townid_name_map)) {
                $query_id = $townid_name_map["{$town_id}-{$village_name}"];
            }
            if (!array_key_exists($query_id, $objects)) {
                $query_id = $data['V_ID'];
            }
        } else if ($data['COUNTY_ID'] == '64000' and $year >= '2011M01') {
            // 前高雄市與前高雄縣改制為高雄市
            $town_suffix = intval(substr($data['TOWN_ID'], 5));
            $town_name = mb_substr($data['TOWN'], 0, -1);

            if (array_key_exists("10012-{$town_name}", $countyid_name_map) and $town_name != '三民') {
                $query_id = sprintf("%08d-%03d", $countyid_name_map["10012-{$town_name}"], $data['VILLAGE_ID']);
            } else {
                $query_id = sprintf("%05d%03d-%03d", 64000, $town_suffix, $data['VILLAGE_ID']);
            }
            // 處理村里代碼變更
            $town_id = explode('-', $query_id)[0];
            $village_name = mb_substr($data['VILLAGE'], 0, -1);
            if (array_key_exists("{$town_id}-{$village_name}", $townid_name_map)) {
                $query_id = $townid_name_map["{$town_id}-{$village_name}"];
            }
        } else if ($data['COUNTY_ID'] == '66000' and $year >= '2011M01') {
            // 前臺中市與前臺中縣改制為臺中市
            $town_suffix = intval(substr($data['TOWN_ID'], 5));
            if ($town_suffix <= 80) {
                $query_id = sprintf("%05d%03d-%03d", 10019, $town_suffix, $data['VILLAGE_ID']);
            } else {
                $query_id = sprintf("%05d%03d-%03d", 10006, $town_suffix - 80, $data['VILLAGE_ID']);
            }

            if ($data['TOWN_ID'] == '66000050' and $data['VILLAGE_ID'] >= 24) {
                // 臺中市北區賴明里66000050-024 => 10019050-043
                $query_id = '10019050-' . sprintf("%03d", $data['VILLAGE_ID'] + 19);
            } else if ($data['TOWN_ID'] == '66000150' and $data['VILLAGE_ID'] >= 15) {
                $query_id = '10006070-' . sprintf("%03d", $data['VILLAGE_ID'] + 1);
            } else if ($data['TOWN_ID'] == '66000010' and $data['VILLAGE_ID'] >= 1) {
                $map = [
                    '001' => 5, // 臺中市中區繼光里66000010-001 => 臺中市中區繼光里10019010-005
                    '002' => 11, // 臺中市中區大墩里66000010-002 => 臺中市中區大墩里10019010-011
                ];
                if (array_key_exists($data['VILLAGE_ID'], $map)) {
                    $query_id = '10019010-' . sprintf("%03d", $map[$data['VILLAGE_ID']]);
                } else {
                    $query_id = '10019010-' . sprintf("%03d", $data['VILLAGE_ID'] + 23);
                }
            } else if ($data['TOWN_ID'] == '66000030') {
                if ($data['VILLAGE_ID'] == '001') {
                    $query_id = '10019030-007';
                } else {
                    $query_id = '10019030-' . sprintf("%03d", $data['VILLAGE_ID'] + 8);
                }
            } else if ($data['TOWN_ID'] == '66000050') {
                $map = [
                    '001' => 12,
                    '002' => 13,
                    '003' => 18,
                    '004' => 22,
                ];
                if (array_key_exists($data['VILLAGE_ID'], $map)) {
                    $query_id = '10019050-' . sprintf("%03d", $map[$data['VILLAGE_ID']]);
                } else {
                    $query_id = '10019050-' . sprintf("%03d", $data['VILLAGE_ID'] + 19);
                }
            } else if ($data['TOWN_ID'] == '66000070') {
                if (intval($data['VILLAGE_ID']) >= 14) {
                    $query_id = '10019070-' . sprintf("%03d", $data['VILLAGE_ID'] + 1);
                } else {
                    $query_id = '10019070-' . sprintf("%03d", $data['VILLAGE_ID']);
                }
            } else if ($data['TOWN_ID'] == '66000040') {
                $map = [
                    '001' => 2,
                    '002' => 4,
                    '003' => 5,
                    '004' => 6,
                    '005' => 7,
                    '006' => 9,
                    '007' => 10,
                    '008' => 12,
                    '009' => 13,
                    '010' => 15,
                    '011' => 17,
                    '012' => 19,
                ];
                if (array_key_exists($data['VILLAGE_ID'], $map)) {
                    $query_id = '10019040-' . sprintf("%03d", $map[$data['VILLAGE_ID']]);
                } else {
                    $query_id = '10019040-' . sprintf("%03d", $data['VILLAGE_ID'] + 10);
                }
            } else if ($data['TOWN_ID'] == '66000020' and $data['VILLAGE_ID'] >= 2) {
                $map = [
                    '003' => 9, 
                    '004' => 10,
                    '005' => 13,
                    '006' => 14,
                    '007' => 16,
                    '008' => 17,
                    '009' => 18,
                    '010' => 19,
                    '011' => 20,
                    '012' => 22,
                    '013' => 24,
                    '014' => 27,
                    '015' => 28,
                    '016' => 29,
                    '017' => 30,
                ];
                if (array_key_exists($data['VILLAGE_ID'], $map)) {
                    $query_id = '10019020-' . sprintf("%03d", $map[$data['VILLAGE_ID']]);
                } else {
                    $query_id = '10019020-' . sprintf("%03d", $data['VILLAGE_ID'] + 3);
                }
            }

            $upgrade_year = '2011M01';
        }

            // 檢查鄉鎮村里名稱是否變更
        if (in_array("{$data['TOWN_ID']}-{$year}", [
            '10012270-2008M04', // 高雄縣那瑪夏
            '10012260-2009M06', // 高雄縣桃源鄉
            '67000350-2021M03', // 臺南市安南區媽祖宮里
            '10008130-2021M09', // 南投縣仁愛鄉德鹿谷村
            '10013030-2021M09', // 屏東縣東港鎮
            '10007220-2022M03', // 彰化縣埤頭鄉永豐村
        ])) {
            // do nothing
        } else if (array_key_exists($query_id, $objects)) {
            if (mb_substr($data['TOWN'], 0, -1) != mb_substr($objects[$query_id]['data']['TOWN'], 0, -1)) {
                throw new Exception("TODO: 處理行政區名稱變更 {$data['NAME']} ({$data['V_ID']}-{$year})");
            }
            if (mb_substr($data['VILLAGE'], 0, -1) != mb_substr($objects[$query_id]['data']['VILLAGE'], 0, -1)) {
                throw new Exception("TODO: 處理行政區名稱變更 {$data['NAME']} ({$data['V_ID']}-{$year})");
            }
            if ($data['NAME'] != $objects[$query_id]['data']['NAME'] or $data['V_ID'] != $objects[$query_id]['data']['V_ID']) {
                error_log("query_id={$query_id}: {$data['NAME']}{$data['V_ID']} => {$objects[$query_id]['data']['NAME']}{$objects[$query_id]['data']['V_ID']}");
            }
        }

        if (!array_key_exists($query_id, $objects)) {
            if (array_key_exists("{$data['TOWN_ID']}-*-{$year}", $change_map)) {
                $change_log = $change_map["{$data['TOWN_ID']}-*-{$year}"];
                $date = $change_log['log_at'];
                if (is_null($date)) {
                    throw new Exception("{$data['TOWN_ID']}-*-{$year} has no log_at");
                }
            }
            $geo_id = "{$query_id}:{$date}";
            file_put_contents(__DIR__ . "/geos/{$geo_id}.json", json_encode([
                'type' => 'Feature',
                'geometry' => $feature->geometry,
                'properties' => [
                    'geo_id' => $geo_id,
                    'year' => $year,
                ],
            ], JSON_UNESCAPED_UNICODE));

            $geometries[$geo_id] = [
                'geometry' => $feature->geometry,
                'data' => [
                    'id' => $query_id,
                    'start_at' => $date,
                ],
                'x' => $properties->x,
                'y' => $properties->y,
                'area' => $properties->area,
            ];
            $meta['geo_id'] = $geo_id;
            $meta['valid'] = true;
            $objects[$query_id] = [
                'data' => $data,
                'meta' => $meta,
                'checked_year' => $year,
            ];
            $output_objects($query_id, $date, $objects[$query_id]);

            if (!$is_first) {
                $log_data = [];
                $town_wildcard = "{$data['TOWN_ID']}-*-{$year}";
                $county_wildcard = "{$data['COUNTY_ID']}*-*-{$year}";
                if (array_key_exists($town_wildcard, $change_map)) {
                    $change_log = $change_map[$town_wildcard];
                    $log_data = [
                        'message' => $change_log['message'],
                    ];
                } elseif (array_key_exists($county_wildcard, $change_map)) {
                    $change_log = $change_map[$county_wildcard];
                    $log_data = [
                        'message' => $change_log['message'],
                    ];
                } else {
                    error_log("town_wildcard={$town_wildcard}, county_wildcard={$county_wildcard}");
                    throw new Exception("TODO: 處理新增行政區 {$data['NAME']} ({$data['V_ID']}-{$year})");
                }

                fputcsv($log_output, [
                    $query_id,
                    $date,
                    $log_data['message'],
                    '',
                ]);
            }
        }

        $changes = [];
        foreach ($data as $k => $v) {
            if ($objects[$query_id]['data'][$k] != $v) {
                $changes[$k] = ['data', $objects[$query_id]['data'][$k], $v];
            }
        }
        foreach ($meta as $k => $v) {
            if ($objects[$query_id]['meta'][$k] != $v) {
                $changes[$k] = ['meta', $objects[$query_id]['meta'][$k], $v];
            }
        }

        // check geometry change
        $current_geo_id = $objects[$query_id]['meta']['geo_id'];
        $x = $geometries[$current_geo_id]['x'];
        $x_change_rate = abs($x - $properties->x) / sqrt($geometries[$current_geo_id]['area']);
        $y = $geometries[$current_geo_id]['y'];
        $y_change_rate = abs($y - $properties->y) / sqrt($geometries[$current_geo_id]['area']);
        $area = $geometries[$current_geo_id]['area'];
        $area_change_rate = abs($area - $properties->area) / $area;

        $x_change_rate = round($x_change_rate, 4);
        $y_change_rate = round($y_change_rate, 4);
        $area_change_rate = round($area_change_rate, 4);

        if ($x_change_rate or $y_change_rate or $area_change_rate) {
            error_log("{$data['NAME']} ({$data['V_ID']}) geometry change: x:{$x}=>{$properties->x}($x_change_rate), y:{$y}=>{$properties->y}($y_change_rate), area:{$area}=>{$properties->area}($area_change_rate)");
        }
        $geo_id = "{$query_id}:{$date}";
        $action = null;
        if ($x_change_rate == 0 and $y_change_rate == 0 and $area_change_rate == 0) {
            $action = 'skip';
        } else if ($x_change_rate < 0.01 and $y_change_rate < 0.01 and $area_change_rate < 0.01) {
            $action = 'replace';
        } else {
            if ($year == '2013M03' and strpos($geo_id, '10004010') === false) {
                // 2013M03 只有竹北有調整，其他都取代成最新版
                $action = 'replace';
            } elseif ($year == '2018M03' and strpos($geo_id, '63000100-039') === 0) {
                // 臺北市內湖區寶湖里看起來 2018M03 之前是錯誤的
                $action = 'replace';
            } elseif ($year == '2018M03' and strpos($geo_id, '63000100-029') === 0) {
                // 臺北市內湖區湖興里看起來 2018M03 之前是錯誤的
                $action = 'replace';
            } elseif ($year == '2019M06' or $year == '2021M03') {
                // 2019M06 之後都是取代成最新版
                $action = 'replace';
            } elseif (in_array("{$year}-{$query_id}", [
                '2018M03-64000100-011', // 高雄市旗津區中洲里
                '2018M03-10001020-060', // 新北市三重區大德里
                '2018M06-10009030-006', // 雲林縣虎尾鎮西安里
                '2018M06-10009030-007', // 雲林縣虎尾鎮安慶里
                '2018M06-10009030-009', // 雲林縣虎尾鎮興南里
                '2018M06-10001020-099', // 新北市三重區慈生里
            ])) {
                // 變更準確
                $action = 'replace';
            } else {
                $action = 'change';
            }
        }


        if ($action == 'skip') {
             // do nothing
        } else if ($action == 'replace') {
            file_put_contents(__DIR__ . "/geos/{$current_geo_id}.json", json_encode([
                'type' => 'Feature',
                'geometry' => $feature->geometry,
                'properties' => [
                    'geo_id' => $geo_id,
                    'year' => $year,
                ],
            ], JSON_UNESCAPED_UNICODE));
            $geometries[$current_geo_id] = [
                'geometry' => $feature->geometry,
                'data' => [
                    'id' => $query_id,
                    'start_at' => $date,
                ],
                'x' => $properties->x,
                'y' => $properties->y,
                'area' => $properties->area,
            ];
        } else if ($action == 'change') {
            file_put_contents(__DIR__ . "/geos/{$geo_id}.json", json_encode([
                'type' => 'Feature',
                'geometry' => $feature->geometry,
                'properties' => [
                    'geo_id' => $geo_id,
                    'year' => $year,
                ],
            ], JSON_UNESCAPED_UNICODE));

            $geometries[$geo_id] = [
                'geometry' => $feature->geometry,
                'data' => [
                    'id' => $query_id,
                    'start_at' => $date,
                ],
                'x' => $properties->x,
                'y' => $properties->y,
                'area' => $properties->area,
            ];
            $objects[$query_id]['meta']['geo_id'] = $geo_id;
            $changes['geo_id'] = ['meta', $current_geo_id, $geo_id];
        }

        if (count($changes) > 0) {
            $change_log = null;
            $town_wildcard = "{$data['TOWN_ID']}-*-{$year}";
            $county_wildcard = "{$data['COUNTY_ID']}*-*-{$year}";
            if (array_key_exists($town_wildcard, $change_map)) {
                $change_log = $change_map[$town_wildcard];
                $date = ($change_log['log_at']);
            } elseif (array_key_exists($county_wildcard, $change_map)) {
                $change_log = $change_map[$county_wildcard];
                $date = ($change_log['log_at']);
            } else if (array_key_exists("{$data['V_ID']}-{$year}", $change_map)) {
                $change_log = $change_map["{$data['V_ID']}-{$year}"];
            }
            if (is_null($date)) {
                throw new Exception("{$data['TOWN_ID']}-*-{$year} has no log_at");
            }

            foreach ($changes as $key => $type_old_new) {
                list($type, $old, $new) = $type_old_new;
                $objects[$query_id][$type][$key] = $new;
            }

            if ($change_log) {
                fputcsv($log_output, [
                    $query_id,
                    $date,
                    $change_log['message'],
                    '',
                ]);
                $output_objects($query_id, $date, $objects[$query_id]);
            } elseif (count($changes) == 1 and array_key_exists('geo_id', $changes)) {
                // skip only geo_id change
                print_r($changes);
                readline("TODO: 處理行政區變更 {$data['NAME']} ({$data['V_ID']}-{$year})");
                //throw new Exception("TODO: 處理行政區變更 {$data['NAME']} ({$data['V_ID']}-{$year})");
            } else {
                print_r($changes);
                throw new Exception("TODO: 處理行政區變更 {$data['NAME']} ({$data['V_ID']}-{$year})");
            }
        }
        $objects[$query_id]['checked_year'] = $year;
    }

    foreach ($objects as $object_id => $object) {
        if (!$object['meta']['valid']) {
            continue;
        }
        if ($object['checked_year'] == $year) {
            continue;
        }
        $town_wildcard = "{$object['data']['TOWN_ID']}-*-{$year}";
        $county_wildcard = "{$object['data']['COUNTY_ID']}*-*-{$year}";
        if (array_key_exists($object['data']['V_ID'], $disabled_object)) {
            $change_log = $disabled_object[$object['data']['V_ID']];
            $objects[$object_id]['meta']['valid'] = false;
            $output_objects($object_id, $date, null);
            fputcsv($log_output, [
                $object_id,
                $date,
                $change_log['message'],
                '',
            ]);
        } elseif (array_key_exists($town_wildcard, $change_map) and ($change_map[$town_wildcard]['disabled'] ?? false)) {
            $change_log = $change_map[$town_wildcard];
            $log_data = [
                'message' => $change_log['message'],
            ];
            $objects[$object_id]['meta']['valid'] = false;

            $output_objects($object_id, $date, null);
            fputcsv($log_output, [
                $object_id,
                $date,
                $log_data['message'],
                '',
            ]);
        } elseif (array_key_exists($county_wildcard, $change_map) and ($change_map[$county_wildcard]['disabled'] ?? false)) {
            $change_log = $change_map[$county_wildcard];
            $log_data = [
                'message' => $change_log['message'],
            ];
            $objects[$object_id]['meta']['valid'] = false;

            $output_objects($object_id, $date, null);
            fputcsv($log_output, [
                $object_id,
                $date,
                $log_data['message'],
                '',
            ]);
        } else {
            print_r($object);
            throw new Exception("TODO: 處理行政區消失 {$object['data']['NAME']} ({$object['data']['V_ID']}-{$year})");
        }
    }
}

fclose($object_output);
fclose($log_output);
