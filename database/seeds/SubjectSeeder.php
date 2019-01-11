<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('subjects')->insert([
             'name' => 'Git',
             'description' => str_random(30),
         ]);
         DB::table('subjects')->insert([
             'name' => 'MySQL',
             'description' => str_random(30),
         ]);
     }
}
