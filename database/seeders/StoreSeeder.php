<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert(
            [
                [
                    'name' => 'Albeline Official',
                    'user_id' => rand(1, 18),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
