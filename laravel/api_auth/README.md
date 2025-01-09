## Laravel Sanctum のインストール
以下のコマンドで Laravel Sanctum はインストールされる.
```
php artisan install:api
```

## User モデルに HasApiTokens を追加
User モデル（`app/Models/User.php`）に `HasApiTokens` トレイトを追加し, ユーザー認証をトークンで行えるようにする.

- [User.php](./sample/User.php)

## guards 設定を追加
`config/auth.php` に認証に必要な `guard` を追加する.
```
'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'users',
    ],
    // API 用の guard
    'api' => [
        'driver' => 'sanctum',
        'provider' => 'users',
    ]
],
```

## ミドルウェアを追加
`bootstarp/app.php` に認証に必要なミドルウェアを追加する.
```
->withMiddleware(function (Middleware $middleware) {
    // ミドルウェアを追加
    $middleware->statefulApi();
})
```

## 認証用コントローラーの作成
```
php artisan make:controller Auth/AuthController
```
- [AuthControllerの例](./sample/AuthController.php)

## 認証ルートの設定
`routes/api.php` に API のルートを定義する.
```
Route::post('/login', [App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');

Route::middleware(['auth:sanctum'])->group(function(){
  Route::get('/user', [App\Http\Controllers\Auth\AuthController::class, 'user']);
  Route::post('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
});
```

## REST Client でのテスト

### ログイン
`login.http` を以下の内容で作成し,動作を確認する.
```
POST http://localhost:8000/api/login  HTTP/1.1
Content-Type: application/json
Accept: application/json

{
  "email": "hogehoge@gmail.com",
  "password": "password"
}
```

### トークンでの認証のテスト
`auth.http` を以下の内容で作成し,動作を確認する.
```
GET http://localhost:8000/api/user/
Content-Type: application/json
Accept: application/json
Authorization: Bearer ここにtoken
```