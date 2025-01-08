# nextjs-laravel-mysql

※ローカルでの開発専用

- フロントエンド : Next.js
- API : Laravel
- DB : MySQL

## コマンド

### コンテナを構築
```
docker-compose build
```

### コンテナ起動
```
docker-compose up -d
```

### コンテナに入る
```
docker exec -it php_www bash
```

### コンテナから出る
```
exit
```

### コンテナを停止
```
docker-compose down
```

### laravelをインストール
```
composer create-project --prefer-dist laravel/laravel app "11.*"
```