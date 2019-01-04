<?php
/**
 * Created by PhpStorm.
 * User: ducthien
 * Date: 04/01/2019
 * Time: 15:48
 */

namespace App\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\User_Course;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Course_Subject;
use App\Models\Task;

class HistoryHelper
{
    public static function getIdOfCourse($IdUser) {
        $getId = User::select('user_courses.id_course as IdCourse')->join('user_courses', 'users.id', '=', 'user_courses.id_user')->where('user_courses.id_user', $IdUser)->first();
        return $getId;
    }

    public static function getCourseOfUser($IdCourse) {
        $getUserCourse = Course::where('id', $IdCourse)->first();
        return $getUserCourse;
    }

    public static function getSubjectOfUser($IdCourse) {
        $getSubjectOfUsers = Subject::select('subjects.id as IdSub', 'subjects.*')
            ->join('course_subjects', 'subjects.id', '=', 'course_subjects.id_subject')
            ->where('course_subjects.id_course', $IdCourse)->get();
        return $getSubjectOfUsers;
    }

    public static function getTask() {
        $getTasks = Task::paginate(config('setting.paginate'));
        return $getTasks;
    }
}
