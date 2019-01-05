<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_courses')->insert([
            'id_course' => 1,
            'id_user' => 1,
        ]);
    }
}
