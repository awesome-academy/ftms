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
            'start_subject' => now(),
            'status' => 1,
        ]);

        DB::table('subjects')->insert([
            'name' => 'MySQL',
            'start_subject' => now(),
            'status' => 1,
        ]);    
    }
}
