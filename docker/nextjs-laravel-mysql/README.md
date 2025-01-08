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
docker exec -it app_api bash
```

### コンテナから出る
```
exit
```

### コンテナを停止
```
docker-compose down
```

### laravelをインストール(初回のみ)
コンテナを起動した後
```
docker exec -it app_api bash
composer create-project --prefer-dist laravel/laravel app "11.*"
```

### Next.jsをインストール(初回のみ)
コンテナを起動する前に
```
docker compose run --rm ui sh -c 'npx create-next-app . --typescript'
```