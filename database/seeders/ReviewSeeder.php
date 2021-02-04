<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'comment' => 'This Product is awesome, good seller',
                'rate' => 3,
                'user_id' => rand(1, 18),
                'product_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Unbelieveble service!, The product has come to my home within a day!',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'It was nice product',
                'rate' => 3,
                'user_id' => rand(1, 18),
                'product_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'I\'ll buy a stuff in here again.',
                'rate' => 3,
                'user_id' => rand(1, 18),
                'product_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Too crazy, the product is much better than i was expected',
                'rate' => 4,
                'user_id' => rand(1, 18),
                'product_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'not so many people will buy this stuff. Good product',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Good product, thanks for the service',
                'rate' => 4,
                'user_id' => rand(1, 18),
                'product_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'As a result of product, it\'s so amazing',
                'rate' => 3,
                'user_id' => rand(1, 18),
                'product_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'I will by the product in here again somedays',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'This stuff is absolutely amazing. Good',
                'rate' => 3,
                'user_id' => rand(1, 18),
                'product_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Thanks, the product has come to me',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Incredible product!, I love this one',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'This is a nice product',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'It is a great product. Thanks',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Thanks for the services',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'The product is awesome',
                'rate' => 3,
                'user_id' => rand(1, 18),
                'product_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Thanks for your fast service dude',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'I love ths one, thanks',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'I will play whit this one',
                'rate' => 3,
                'user_id' => rand(1, 18),
                'product_id' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Finally, the product has come to me, thanks',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'It\'s a good product, but the service need an improvement. However, this is good stuff. Thanks',
                'rate' => 4,
                'user_id' => rand(1, 18),
                'product_id' => '8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'I love this product, thanks',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'While you stay in home, suddenly the product\'s come. Thanks for your services',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'This is by far one the best store with a good services',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'This is a good product Thanks',
                'rate' => 4,
                'user_id' => rand(1, 18),
                'product_id' => '10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Good product Thanks',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Nice one',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'I love this product thanks',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Great and Solid, thats the simple words to describe this product',
                'rate' => 4,
                'user_id' => rand(1, 18),
                'product_id' => '13',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Thanks for the services bro',
                'rate' => 4,
                'user_id' => rand(1, 18),
                'product_id' => '14',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'marvelous service. The product had come to my home within a day',
                'rate' => 4,
                'user_id' => rand(1, 18),
                'product_id' => '15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'good stuff',
                'rate' => 5,
                'user_id' => rand(1, 18),
                'product_id' => '16',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Thanks for the services',
                'rate' => 3,
                'user_id' => rand(1, 18),
                'product_id' => '16',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'good product dude',
                'rate' => 4,
                'user_id' => rand(1, 18),
                'product_id' => '16',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
