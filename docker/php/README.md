# PHP

小規模サイト用のDocker.

※ローカルでの開発専用

- フロントエンド : php

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
