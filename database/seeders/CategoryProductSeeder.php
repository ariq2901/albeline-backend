<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_product')->insert(
            [
                [
                    'category_id' => 10,
                    'product_id' => 1, //^ lg
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => 12,
                    'product_id' => 1, //^ lg
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => 11,
                    'product_id' => 2, //^ lego
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => 1,
                    'product_id' => 2, //^ lego
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => 10,
                    'product_id' => 3, //^ ps4
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => 12,
                    'product_id' => 3, //^ ps4
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => 3,
                    'product_id' => 4, //^ adidas
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => 5,
                    'product_id' => 5, //^ iphone
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => 10,
                    'product_id' => 5, //^ iphone
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => 3,
                    'product_id' => 6, //^ uniqlo
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => 9,
                    'product_id' => 7, //^ sony headset
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => 10,
                    'product_id' => 7, //^ sony headset
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => 10,
                    'product_id' => 8, //^ konka
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => 7,
                    'product_id' => 9, //^ jajangmyeon
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => 7,
                    'product_id' => 10, //^ bolu kukus
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => 2,
                    'product_id' => 11, //^ aromatherapi
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => 12,
                    'product_id' => 11, //^ aromatherapi
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => 12,
                    'product_id' => 12, //^ Sofa
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
