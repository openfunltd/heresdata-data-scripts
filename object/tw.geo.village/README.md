# 整理中華民國歷年村里資料

## 需要軟體
- unrar-free: 解壓縮 rar 檔案
- gdal-bin: 轉換地理資料格式
- php-zip: 解壓縮 zip 檔案

## 步驟
- 執行 ```php crawl-shpfile.php```，會下載[社會經濟資料服務平台](https://segis.moi.gov.tw/STATCloud/Index)中每一季的「行政區人口統計_村里」資料，至 zips/ 資料夾
- 執行 ```php zip-to-geojson.php```，將 zips/ 中不同版本的地理資料取出來轉成 geojson ，存入 geojsons/ 資料夾
- 執行 ```php gen-data.php``` 會將 geojson 資料讀取出歷史變遷，存入 outputs/log.csv outputs/object.csv
- 執行 ```git clone git@github.com:ronnywang/segis-village``` 將 segis-village repo clone 到 segis-village/ 資料夾

