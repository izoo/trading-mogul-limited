<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\VehicleSeeder;
use Database\Seeders\OrderSeeder;
use Database\Seeders\UserSeeder;
// use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call([
            VehicleSeeder::class,
            OrderSeeder::class,
            UserSeeder::class
        ]);
    }
}
