# よく使うコマンド

Laravel Santcum のインストール
```
php artisan install:api
```

tinker（例）
```
php artisan tinker
> $user = new App\Models\User;
> $user->name = 'hogehoge';
= "hogehoge"
> $user->save();
= true
```

コントローラーを追加する.
```
php artisan make:controller hogehogeController
```

キャッシュをクリアする
```
php artisan config:clear
php artisan cache:clear
php artisan config:cache
```