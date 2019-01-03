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
            'gender' => 1,
            'phone' => '031313121',
            'birthday' => now(),
            'address' => str_random(30),
            'avatar' => 'default.jpg',
            'role' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Thien',
            'email' => 'b@gmail.com',
            'password' => bcrypt('123'),
            'gender' => 2,
            'phone' => '031313121',
            'birthday' => now(),
            'address' => str_random(30),
            'avatar' => 'default.jpg',
            'role' => 1,
        ]);
    }
}
