# Gulp で Sassと　JS の開発環境を作る

## package.jsonファイルを生成
```
npm init
```

## Gulpのインストール
```
npm install -D sass gulp gulp-sass gulp-sourcemaps gulp-concat gulp-uglify gulp-babel gulp-rename gulp-cssnano @babel/core @babel/preset-env
```

## ディレクトリ構成
```
.
└── htdocs
    ├── assets
    │   ├── css
    │   ├── img
    │   ├── js
    │   ├── library
    │   ├── sass
    │   └── scripts
    ├── node_modules
    ├── gulpfile.js
    ├── index.php
    ├── package-lock.json
    └── package.json
```

- sass : scss ファイルを入れる
- script : まとめる前の js
- css : Gulp でまとめた css 用ディレクトリ
- js : Gulp でまとめた js 用ディレクトリ

## コマンド

### 監視開始
```
npx gulp
```