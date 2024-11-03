# 整理中華民國歷年村里資料
這個專案是為了從[社會經濟資料服務平台](https://segis.moi.gov.tw/STATCloud/Index)中下載歷年村里變遷資料，把他整理成乾淨資料供其他服務利用

## 成果
- [村里資料 @ huggingface](https://huggingface.co/datasets/openfun/tw-geo-village-data)
- [村里變動資料 @ huggingface](https://huggingface.co/datasets/openfun/tw-geo-village-log)
- [村里變遷展示](https://ronnywang.github.io/segis-village/)

## License
- 程式碼授權： BSD License by OpenFun 歐噴有限公司

## 需要軟體
- unrar-free: 解壓縮 rar 檔案
- gdal-bin: 轉換地理資料格式
- php-zip: 解壓縮 zip 檔案

## 步驟
- 執行 ```php crawl-shpfile.php```，會下載[社會經濟資料服務平台](https://segis.moi.gov.tw/STATCloud/Index)中每一季的「行政區人口統計_村里」資料，至 zips/ 資料夾
- 執行 ```php zip-to-geojson.php```，將 zips/ 中不同版本的地理資料取出來轉成 geojson ，存入 geojsons/ 資料夾
- 執行 ```php gen-data.php``` 會將 geojson 資料讀取出歷史變遷，存入 outputs/log.csv outputs/object.csv
- 執行 ```php split-version.php``` 將 outputs/object.csv 依照版本存入 outputs/versions/ 內
- 執行 ```git clone git@github.com:ronnywang/segis-village``` 將 segis-village repo clone 到 segis-village/ 資料夾
- 執行 ```php export-to-segis-village.php``` 將 outputs/object.csv 的結果轉換成 segis-village/history.jsonl
