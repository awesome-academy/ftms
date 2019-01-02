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
            'start_subject' => '2018-12-30 00:00:00',
            'status' => 1,
        ]);

        DB::table('subjects')->insert([
            'name' => 'MySQL',
            'start_subject' => '2019-01-01 00:00:00',
            'status' => 1,
        ]);
    }
}
