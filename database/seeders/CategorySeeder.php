<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                [
                    'name' => 'Baby', //^ 1
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Beauty', //^ 2
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Fashions', //^ 3
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Computer', //^ 4
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Handphone', //^ 5
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Sports', //^ 6
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Foods', //^ 7
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Backpacks', //^ 8
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Accessories', //^ 9
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Electronics', //^ 10
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Toys', //^ 11
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Furnitures', //^ 12
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
