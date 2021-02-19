<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Cart;
use App\Models\Review;
use App\Models\Product;
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
        // \App\Models\User::factory(10)->create();
        $this->call([
            ImageSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            BannerSeeder::class,
            StoreSeeder::class,
            // CartSeeder::class,
            CategoryProductSeeder::class,
            CategorySeeder::class,
            // HistorySeeder::class,
            ProductSeeder::class,
            ReviewSeeder::class,
        ]);
    }
}
