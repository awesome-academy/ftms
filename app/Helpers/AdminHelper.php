<?php

namespace App\Helpers;

use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class AdminHelper
{

    public static function getUser($role)
    {
        $getUser = User::where('role', $role)->paginate(config('setting.paginate'));

        return $getUser;
    }

    public static function getCourse()
    {
        $getCourse = Course::paginate(config('setting.paginate'));

        return $getCourse;
    }

    public static function getTaskOfCourse($course){
        $getTaskOfCourse = Course::join('course_subjects', 'courses.id', '=', 'course_subjects.id_course')
            ->join('subjects', 'course_subjects.id_subject', '=', 'subjects.id')
            ->join('tasks', 'subjects.id', '=', 'tasks.id_subject')
            ->select(DB::raw('Date(tasks.created_at) as date'), DB::raw('COUNT(tasks.id) as total'))
            ->where('courses.id', $course)
            ->groupBy(DB::raw('Date(tasks.created_at)'))
            ->get();

        return $getTaskOfCourse;
    }

    public static function getIdCourse(){
        $getIdCourse = Course::aLl();

        return $getIdCourse;
    }
}
