<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Duy',
            'email' => 'a@gmail.com',
            'password' => bcrypt('123'),
            'gender' => config('setting.male'),
            'phone' => '031313121',
            'birthday' => now(),
            'address' => str_random(30),
            'role' => config('setting.admin'),
        ]);

        DB::table('users')->insert([
            'name' => 'Thien',
            'email' => 'b@gmail.com',
            'password' => bcrypt('123'),
            'gender' => config('setting.female'),
            'phone' => '031313121',
            'birthday' => now(),
            'address' => str_random(30),
            'role' => config('setting.supervisor'),
        ]);

        DB::table('users')->insert([
            'name' => 'Thịnh',
            'email' => 'c@gmail.com',
            'password' => bcrypt('123'),
            'gender' => config('setting.male'),
            'phone' => '031313121',
            'birthday' => now(),
            'address' => str_random(30),
            'role' => config('setting.trainee'),
        ]);
    }
}
