# Users テーブルに role を追加する

## マイグレーションファイルを作る
```
php artisan make:migration add_role_to_users_table --table=users
```

## マイグレーションファイルを編集
```
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
          $table->string('role')->default('user')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('role');
        });
    }
};
```

## マイグレーションを実行
```
php artisan migrate
```