<?php

// 100.zip => 100.zip.geojson

foreach (glob(__DIR__ . "/shapefiles/*.zip") as $zip_file) {
    $filename = basename($zip_file);
    $zip = new ZipArchive;
    $zip->open($zip_file);
    // get list
    $files = [];
    if (!file_exists(__DIR__ . '/tmp')) {
        mkdir(__DIR__ . '/tmp');
    }
    for ($i = 0; $i < $zip->numFiles; $i++) {
        if (preg_match('#G97_TW_.*.rar#', $zip->getNameIndex($i))) {
            $zip->extractTo(__DIR__ . '/tmp/', $zip->getNameIndex($i));
            // use unrar-free to extract rar
            $cmd = sprintf("unrar-free e %s %s",
                escapeshellarg(__DIR__ . '/tmp/' . $zip->getNameIndex($i)),
                escapeshellarg(__DIR__ . '/tmp/')
            );
            system($cmd, $ret);
            if ($ret !== 0) {
                throw new Exception('unrar failed');
            }

            // find .shp fil
            $shp = glob(__DIR__ . '/tmp/*.shp');
            if (!$shp) {
                throw new Exception('No .shp file found');
            }

            // use ogr2ogr to convert shp to geojson
            // from egsp:3826 to wgs84
            $cmd = sprintf("ogr2ogr -f GeoJSON %s %s -t_srs EPSG:4326 -s_srs EPSG:3826",
                escapeshellarg(__DIR__ . "/{$filename}.geojson"),
                escapeshellarg($shp[0])
            );
            system($cmd, $ret);
            if ($ret !== 0) {
                throw new Exception('ogr2ogr failed');
            }

            // check file is big5
            $text = file_get_contents(__DIR__ . "/geojsons/{$filename}.geojson");
            if (mb_detect_encoding($text, 'BIG-5, UTF-8', true) === 'BIG-5') {
                // convert to utf-8
                $text = mb_convert_encoding($text, 'UTF-8', 'BIG-5');
                file_put_contents(__DIR__ . "/geojsons/{$filename}.geojson", $text);
            }

            break;
        }
    }
    $zip->close();
    // remove tmp files
    system("rm -rf " . escapeshellarg(__DIR__ . '/tmp'));
}
