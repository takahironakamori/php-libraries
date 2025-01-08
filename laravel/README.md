# 初期設定

## MySQLに設定変更
.env ファイル内の DB_hogehoge を以下のように変更.
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=database
DB_USERNAME=db-user
DB_PASSWORD=db-pass
```

## MySQL に反映
```
php artisan migrate
```


## Laravel Sanctum のインストール
以下のコマンドで Laravel Sanctum はインストールされる.
```
php artisan install:api
```