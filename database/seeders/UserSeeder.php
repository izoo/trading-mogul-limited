<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user_logins= ["mombasa@gmail.com","nairobi@gmail.com"];
        $names = ["mombasa user","nairobi user"];
        foreach (range(0,1) as $index) {
            DB::table('users')->insert([
            'name' => $names[$index],
            'email' => $user_logins[$index],
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            ]);
          }
    }
}