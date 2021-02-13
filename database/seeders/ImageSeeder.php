<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert(
            [
                [
                    'path' => 'products/lg-smarttv.webp',
                    'imageable_id' => '1',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/lg-smarttv2.jfif',
                    'imageable_id' => '1',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/lg-smarttv3.webp',
                    'imageable_id' => '1',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/lego.jpg',
                    'imageable_id' => '2',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/lego2.jfif',
                    'imageable_id' => '2',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/lego3.jpg',
                    'imageable_id' => '2',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/ps4pro.png',
                    'imageable_id' => '3',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/ps4pro2.png',
                    'imageable_id' => '3',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/ps4pro3.png',
                    'imageable_id' => '3',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/shoe.png',
                    'imageable_id' => '4',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/adidas2.jpg',
                    'imageable_id' => '4',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/adidas3.jpg',
                    'imageable_id' => '4',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/iphone.png',
                    'imageable_id' => '5',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/iphone12.jfif',
                    'imageable_id' => '5',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/iphone12-3.webp',
                    'imageable_id' => '5',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/uniqlo.jpg',
                    'imageable_id' => '6',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/uniqlo2.jpg',
                    'imageable_id' => '6',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/uniqlo3.jpg',
                    'imageable_id' => '6',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/sony.webp',
                    'imageable_id' => '7',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/sony2.jfif',
                    'imageable_id' => '7',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/sony3.jpg',
                    'imageable_id' => '7',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/konka.jpg',
                    'imageable_id' => '8',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/konka.jfif',
                    'imageable_id' => '8',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/konka.webp',
                    'imageable_id' => '8',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/jajangmyeon.jfif',
                    'imageable_id' => '9',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/jajangmyeon2.jfif',
                    'imageable_id' => '9',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/jajangmyeon3.jfif',
                    'imageable_id' => '9',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/bolu.jpeg',
                    'imageable_id' => '10',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/bolu2.jpeg',
                    'imageable_id' => '10',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/aromaterapi.jpg',
                    'imageable_id' => '11',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/aromaterapi2.jfif',
                    'imageable_id' => '11',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/aromaterapi3.jpg',
                    'imageable_id' => '11',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'products/coffret.jpg',
                    'imageable_id' => '12',
                    'imageable_type' => 'App\Models\Product',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'banners/banner5.jpg',
                    'imageable_id' => '1',
                    'imageable_type' => 'App\Models\Banner',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'banners/banner6.jpg',
                    'imageable_id' => '2',
                    'imageable_type' => 'App\Models\Banner',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'banners/banner7.jpg',
                    'imageable_id' => '3',
                    'imageable_type' => 'App\Models\Banner',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'banners/banner10.jpg',
                    'imageable_id' => '4',
                    'imageable_type' => 'App\Models\Banner',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'banners/banner11.jpg',
                    'imageable_id' => '5',
                    'imageable_type' => 'App\Models\Banner',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'banners/banner8.jpg',
                    'imageable_id' => '6',
                    'imageable_type' => 'App\Models\Banner',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'banners/banner9.jpg',
                    'imageable_id' => '7',
                    'imageable_type' => 'App\Models\Banner',
                    'thumbnail' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'categories/baby.png',
                    'imageable_id' => '1',
                    'imageable_type' => 'App\Models\Category',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'categories/beauty.png',
                    'imageable_id' => '2',
                    'imageable_type' => 'App\Models\Category',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'categories/cloth.png',
                    'imageable_id' => '3',
                    'imageable_type' => 'App\Models\Category',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'categories/computer.png',
                    'imageable_id' => '4',
                    'imageable_type' => 'App\Models\Category',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'categories/phone.png',
                    'imageable_id' => '5',
                    'imageable_type' => 'App\Models\Category',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'categories/sport.png',
                    'imageable_id' => '6',
                    'imageable_type' => 'App\Models\Category',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'categories/food.png',
                    'imageable_id' => '7',
                    'imageable_type' => 'App\Models\Category',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'categories/bag.png',
                    'imageable_id' => '8',
                    'imageable_type' => 'App\Models\Category',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'categories/headset.png',
                    'imageable_id' => '9',
                    'imageable_type' => 'App\Models\Category',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'categories/electronic.png',
                    'imageable_id' => '10',
                    'imageable_type' => 'App\Models\Category',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'categories/toy.png',
                    'imageable_id' => '11',
                    'imageable_type' => 'App\Models\Category',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'path' => 'categories/furniture.png',
                    'imageable_id' => '12',
                    'imageable_type' => 'App\Models\Category',
                    'thumbnail' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

            ]
        );
    }
}
