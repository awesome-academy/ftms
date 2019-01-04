<?php
//app/Helpers/Envato/User.php
namespace App\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\User_Course;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Course_Subject;
use App\Models\Task;

class HomeHelper {
    /**
     * @param int $user_id User-id
     * 
     * @return string
     */
    public static function getIdOfCourse($IdUser) {
        $getId = User::select('user_courses.id_course as IdCou')->join('user_courses', 'users.id', '=', 'user_courses.id_user')->where('user_courses.id_user', $IdUser)->first();
        return $getId;
    }

    public static function getMemberOfCourse($IdCourse) {
        $getMemberOfCourses = User::join('user_courses', 'users.id', '=', 'user_courses.id_user')->where('user_courses.id_course', $IdCourse)->get();
        return $getMemberOfCourses;
    }

    public static function getCourseOfUser($IdCourse) {
        $getUserCourse = Course::where('id', $IdCourse)->first();
        return $getUserCourse;
    }

    public static function getSubjectOfUser($IdCourse) {
        $getSubjectOfUsers = Subject::select('subjects.id as IdSub', 'subjects.name')->join('course_subjects', 'subjects.id', '=', 'course_subjects.id_subject')->where('course_subjects.id_course', $IdCourse)->get();
        return $getSubjectOfUsers;
    }

    public static function getProfileMemberOfCourse($IdCourse) {
        $getProfileMemberOfCourses = User::where('id', $IdCourse)->first();
        return $getProfileMemberOfCourses;
    }

    public static function getSubjectDetail($IdSubject) {
        $getSubjectDetail = Subject::where('subjects.id', $IdSubject)->first();
        return $getSubjectDetail;
    }

    public static function getTaskDetail($IdSubject) {
        $getTasks = Task::where('tasks.id_subject', $IdSubject)->get();
        return $getTasks;
    }

    public static function getMyCalendar($idUSer){
        $getMyCalendars = Subject::where('id',$idUser)->get();
        return $getMyCalendars;
    }
}
