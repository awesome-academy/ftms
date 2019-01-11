<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStartSubjectEndSubjectStatusToCourseSubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_subjects', function (Blueprint $table) {
            $table->dateTime('start_subject');
            $table->dateTime('end_subject')->nullable();
            $table->tinyInteger('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_subjects', function (Blueprint $table) {
            Schema::dropColumn('start_subject');
            Schema::dropColumn('end_subject');
            Schema::dropColumn('status');
        });
    }
}
