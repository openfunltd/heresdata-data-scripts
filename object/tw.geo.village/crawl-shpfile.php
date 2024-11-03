<?php

$token = null;
$get_download_url = function($product) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_COOKIEJAR, 'cookie.txt');
    curl_setopt($curl, CURLOPT_COOKIEFILE, 'cookie.txt');
    $url = 'https://segis.moi.gov.tw/STATCloud/QueryInterfaceView?COL=' . urlencode($product->DEC_COL) . '&MCOL=' . urlencode($product->DEC_MCOL);
    curl_Setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    preg_match('#data-pid="([^"]*)"#', $response, $matches);
    $pid = $matches[1];
    if (!preg_match('#<gs-request-token value="([^"]*)"></gs-request-token>#', $response, $matches)) {
        throw new Exception('No token found');
    }
    $token = $matches[1];

    curl_setopt($curl, CURLOPT_URL, 'https://segis.moi.gov.tw/STATCloud/reqcontroller.go');
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3');
    curl_setopt($curl, CURLOPT_REFERER, $url);
    $params = [
        'method' => 'filedown.DownloadProductFile',
        'aProductCode' => $pid,
        'aType' => 'shp',
        'IsGetFile' => 'false',
        'IsRemove' => 'false',
    ];
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
        'Referer: https://segis.moi.gov.tw/STATCloud/',
        'X-Requested-With: XMLHttpRequest',
        "gs-request-token: $token"
    ]);
    $response = curl_exec($curl);
    $obj = json_decode($response);
    if (!($obj->Content->Url ?? false)) {
        echo $response;
        throw new Exception('No download url found');
    }
    return $obj->Content->Url;
};

$curl = curl_init('https://segis.moi.gov.tw/STATCloud/QueryInterface');
curl_setopt($curl, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEFILE, 'cookie.txt');
curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3');
curl_setopt($curl, CURLOPT_REFERER, 'https://segis.moi.gov.tw/STATCloud/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);
if (!preg_match('#<gs-request-token value="([^"]*)"></gs-request-token>#', $response, $matches)) {
    throw new Exception('No token found');
}
$token = $matches[1];
if (!file_exists(__DIR__ . '/shapefiles')) {
    mkdir(__DIR__ . '/shapefiles');
}

curl_setopt($curl, CURLOPT_URL, 'https://segis.moi.gov.tw/STATCloud/reqcontroller.go');
$params = [
    'draw' => 2,
    'columns[0][data]' => 'CNAME',
    'columns[0][name]' => 'CNAME',
    'columns[0][searchable]' => true,
    'columns[0][orderable]' => false,
    'columns[0][search][value]' => '',
    'columns[0][search][regex]' => false,
    'columns[1][data]' => 'BOUNDARY_DESC',
    'columns[1][name]' => 'BOUNDARY_DESC',
    'columns[1][searchable]' => true,
    'columns[1][orderable]' => false,
    'columns[1][search][value]' => '',
    'columns[1][search][regex]' => false,
    'columns[2][data]' => 'STUNIT_NAME',
    'columns[2][name]' => 'STUNIT_NAME',
    'columns[2][searchable]' => true,
    'columns[2][orderable]' => false,
    'columns[2][search][value]' => '',
    'columns[2][search][regex]' => false,
    'columns[3][data]' => 'PRODUCT_COUNT',
    'columns[3][name]' => 'PRODUCT_COUNT',
    'columns[3][searchable]' => true,
    'columns[3][orderable]' => false,
    'columns[3][search][value]' => '',
    'columns[3][search][regex]' => false,
    'columns[4][data]' => 'PRODUCT_COUNT',
    'columns[4][name]' => 'PRODUCT_COUNT',
    'columns[4][searchable]' => true,
    'columns[4][orderable]' => false,
    'columns[4][search][value]' => '',
    'columns[4][search][regex]' => false,
    'columns[5][data]' => 'PRODUCT_COUNT',
    'columns[5][name]' => 'PRODUCT_COUNT',
    'columns[5][searchable]' => true,
    'columns[5][orderable]' => false,
    'columns[5][search][value]' => '',
    'columns[5][search][regex]' => false,
    'start' => 0,
    'length' => 200,
    'search[value]' => '',
    'search[regex]' => false,
    'method' => 'dataset.GetDataSetList',
    'division' => '',
    'section' => 0,
    'stunit' => '4',
    'boundary' => '全國（22縣市）',
    'yearstart' => '',
    'yearend' => '',
    'opentype' => '',
    'keyword' => '行政區人口統計_村里'
];
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
    'Referer: https://segis.moi.gov.tw/STATCloud/',
    'X-Requested-With: XMLHttpRequest',
    "gs-request-token: $token"
]);
$response = curl_exec($curl);
$obj = json_decode($response);

foreach ($obj->data as $data) {
/*                     [new_num] => 1
                    [SUB_PRODUCT_ID] => 0
                    [SORT_ID] => 176556
                    [CNAME] => 111年11月全國鄉鎮市區界圖
                    [CODE] => TW-04-301000000A-140005_GIS-2022M11-TW
                    [MID] => TW-04-301000000A-140005
                    [BOUNDARY_DESC] => 全國
                    [BOUNDARY_INDEX] =>
                    [SUB_BOUNDARY_DESC] =>
                    [SUB_BOUNDARY_INDEX] =>
                    [STUNIT_CODE] =>
                    [STUNIT_NAME] =>
                    [STTIME] => 111Y11M
                    [APPLY_TYPE_ID] => 0
                    [PRODUCT_COUNT] => 16
                    [DEC_COL] => kFM2ldlkHJRDp94rXDCVVg%3d%3d
                    [DEC_MCOL] => tmUOJ%2ffgrv3sFM0kGN4a6g%3d%3d */
    // url: https://segis.moi.gov.tw/STATCloud/reqcontroller.file?method=filedown.downloadproductfile&code=tmUOJ%2ffgrv3sFM0kGN4a6g%3d%3d&STTIME=111Y11M&STUNIT=null&BOUNDARY=全國
    // // https://segis.moi.gov.tw/STATCloud/reqcontroller.file?method=filedown.downloadproductfile&code=aj3glt9cObW0eRIuwGSlPw%3d%3d&STTIME=113Y06M&STUNIT=U01VI&BOUNDARY=全國&SUB_BOUNDARY=
    $target = __DIR__ . "/zips/{$data->STTIME}.zip";
    if (file_Exists($target)) {
        continue;
    }
    $id = $get_download_url($data);
    $url = "https://segis.moi.gov.tw/FileDownload/Download.aspx?u=" . ($id);
    $cmd = sprintf("wget -O %s %s", escapeshellarg($target), escapeshellarg($url));
    system($cmd);
}
