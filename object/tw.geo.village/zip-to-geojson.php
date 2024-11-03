<?php

if (!file_exists(__DIR__ . '/geojsons')) {
    mkdir(__DIR__ . '/geojsons');
}
if (file_exists(__DIR__ . '/tmp')) {
    system("rm -rf " . escapeshellarg(__DIR__ . '/tmp'));
}
if (!file_exists(__DIR__ . '/tmp')) {
    mkdir(__DIR__ . '/tmp');
}
foreach (glob(__DIR__ . '/zips/*.zip') as $zip_file) {
    $filename = basename($zip_file);
    $zip = new ZipArchive;
    $zip->open($zip_file);
    // get list
    $files = [];
    $geojson_file = __DIR__ . "/geojsons/{$filename}.geojson";
    if (file_exists($geojson_file)) {
        if (filesize($geojson_file) == 0) {
            unlink($geojson_file);
        } else {
            continue;
        }
    }

    $shp_file = null;
    $data_file = null;
    for ($i = 0; $i < $zip->numFiles; $i++) {
        $filename = $zip->getNameIndex($i);
        if (preg_match('#U01VI-\d+M\d+-TW.zip$#', $filename)) {
            $data_file = $filename;
        } elseif (preg_match('#\d+年\d+月行政區人口統計_村里_SHP.zip$#', $filename)) {
            $shp_file = $filename;
        }
        $zip->extractTo(__DIR__ . '/tmp/', $zip->getNameIndex($i));
    }
    $zip->close();
    if (is_null($shp_file) || is_null($data_file)) {
        throw new Exception('shp or data file not found');
    }

    $zip = new ZipArchive;
    $zip->open(__DIR__ . '/tmp/' . $data_file);
    $layer_name = null;
    for ($i = 0; $i < $zip->numFiles; $i++) {
        $filename = $zip->getNameIndex($i);
        if ($filename != 'Info.ini') {
            continue;
        }

        $content = $zip->getFromIndex($i);
        // check big5
        if (mb_detect_encoding($content, 'BIG-5, UTF-8', true) === 'BIG-5') {
            $content = mb_convert_encoding($content, 'UTF-8', 'BIG-5');
        }
        if (!preg_match('#圖層名稱=(.*)#', $content, $matches)) {
            throw new Exception('layer name not found: ' . $filename);
        }
        $layer_name = trim($matches[1]);
    }

    $zip->close();
    if (is_null($layer_name)) {
        throw new Exception('layer name not found');
    }
    $target = __DIR__ . "/geojsons/{$layer_name}.geojson";
    if (file_exists($target . '.gz')) {
        continue;
    }
    mkdir(__DIR__ . '/tmp/shp');
    $zip = new ZipArchive;
    $zip->open(__DIR__ . '/tmp/' . $shp_file);
    $shp = [];
    for ($i = 0; $i < $zip->numFiles; $i++) {
        $target_name = $zip->getNameIndex($i);
        // skip .ini
        if (preg_match('#\.ini$#i', $target_name)) {
            continue;
        }
        // output {name}.* to tmp/shp/{layer_name}.*
        $ext = strtolower(pathinfo($target_name, PATHINFO_EXTENSION));
        if ($ext == 'dbf' || $ext == 'prj' || $ext == 'shp' || $ext == 'shx') {
            $target_name = $layer_name . '.' . $ext;
        } else {
            throw new Exception('unknown file type: ' . $target_name);
        }

        $zip->extractTo(__DIR__ . '/tmp/shp/', $zip->getNameIndex($i));
        rename(__DIR__ . '/tmp/shp/' . $zip->getNameIndex($i), __DIR__ . '/tmp/shp/' . $target_name);
        if (preg_match('#\.shp$#i', $target_name)) {
            $shp[] = __DIR__ . '/tmp/shp/' . $target_name;
        }
    }
    $zip->close();
    if (count($shp) == 0) {
        throw new Exception('shp file not found');
    }
    $cmd = sprintf("ogr2ogr --config SHAPE_ENCODING Big5 -f GeoJSON %s %s -t_srs EPSG:4326 -s_srs EPSG:3826 -dialect sqlite -sql %s",
        escapeshellarg(__DIR__ . "/geojsons/{$layer_name}.geojson"),
        escapeshellarg($shp[0]),
        escapeshellarg("SELECT *, ST_X(ST_Centroid(geometry)) AS x, ST_Y(ST_Centroid(geometry)) AS y, ST_Area(geometry) AS area FROM " . pathinfo($shp[0], PATHINFO_FILENAME))
    );
    system($cmd, $ret);
    if ($ret !== 0) {
        throw new Exception('ogr2ogr failed');
    }

    // remove tmp files
    system("rm -rf " . escapeshellarg(__DIR__ . '/tmp'));
    $cmd = sprintf("gzip %s", escapeshellarg($target));
    system($cmd);
}
