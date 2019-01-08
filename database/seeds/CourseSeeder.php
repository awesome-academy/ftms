<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => 'PHP',
            'description' => str_random(30),
            'status' => 1,
            'started_at' =>now(),
        ]);
        DB::table('courses')->insert([
            'name' => 'RUBY',
            'description' => str_random(30),
            'status' => 1,
            'started_at' =>now(),
        ]);
    }
}
