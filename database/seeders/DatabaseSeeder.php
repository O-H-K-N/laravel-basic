<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ユーザーのダミーデータを作成
        $this->call([
            UserSeeder::class,
            AreaSeeder::class,
            ShopSeeder::class,
            RouteSeeder::class,
            RouteShopSeeder::class,
        ]);

        // お問い合わせのダミーデータを作成
        \App\Models\ContactForm::factory(100)->create();
    }
}
