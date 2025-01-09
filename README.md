# website-libraries
ウェブサイト制作で使うためのスニペット、ライブラリや実装例

## 小規模なウェブサイト用

WordPress等のCMSを使わない、小規模なウェブページ用のテンプレート

### テンプレート

- [ウェブページのテンプレート(common.phpを使用)](./templates/normal.php)

### assets

- [common.php](./templates/assets/php/common.php)
- [main.js(要jQuery)](./templates/assets/js/main.js)
- [style.css](./templates/assets/css/style.js)

## PHP functions

### URL

- [現在のWebページのドメイン（例:https://www.example.com/）を取得する](./url/getBaseUrl.php)
- [現在のWebページのURLを取得する](./url/getCurrentUrl.php)

## Docker

- [PHP(小規模ウェブサイト用)](./docker/php/)
- [WordPressテーマ開発用](./docker/wordpress/)
- [【作成中】Next.js-Laravel-MySql](./docker/nextjs-laravel-mysql/)

## Gulp

- [Gulp で Sassと　JS の開発環境を作る](./gulp/)

## Laravel

- [インストール後の初期設定](./laravel/init/)
- [よく使うコマンド](./laravel/commands/)
- [APIで認証する仕組みを作る](./laravel/api_auth/)