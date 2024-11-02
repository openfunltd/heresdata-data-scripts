# 加入中華民國歷年縣市資料

## 需要軟體
- unrar-free: 解壓縮 rar 檔案
- gdal-bin: 轉換地理資料格式
- php-zip: 解壓縮 zip 檔案

## 步驟
- 到 [社會經濟資料庫](https://segis.moi.gov.tw/STATCloud/QueryInterface) 可以搜尋關鍵字=「縣市界圖」，可以找到 104, 100, 98 年三年的縣市界圖，選右邊連結可以下載 zip 檔，但是 zip 裡面還有 rar 才是地理資料。
- 將資料下載成 104.zip, 100.zip, 98.zip ，存入 shapefiles/
- 執行 ```php zip-to-geojson.php``` 會產生 geojsons/104.zip.geojson, 100.zip.geojson, 98.zip.geojson
- 執行 ```php gen-data.php``` 會將 geojson 匯入到資料庫中

