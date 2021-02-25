<?php
namespace Database\Seeders;

use App\Models\Store;
use App\Models\User;
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
        $store = Store::create(["name" => 'Albeline Official', "city_id" => 154, "city_name" => 'Jakarta Timur',"user_id" => rand(1, 18), "created_at" => now(), "updated_at" => now()]);
        
        try {
            $user = User::findOrFail($store->user_id);
            $user->syncRoles(['pembeli', 'penjual']);
        } catch (\Throwable $e) {
            dump($e);
        }
    }
}
