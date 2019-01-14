<?php
/**
 * Created by PhpStorm.
 * User: ducthien
 * Date: 05/01/2019
 * Time: 11:25
 */

namespace App\Helpers;
use App\Models\User;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Task;
use App\Models\Course_Subject;

class HomeHelper
{
    public static function getIdOfCourse($IdUser) {
        $getId = User::select('user_courses.id_course as IdCou')
            ->join('user_courses', 'users.id', '=', 'user_courses.id_user')
            ->where('user_courses.id_user', $IdUser)
            ->first();

        return $getId;
    }

    public static function getMemberOfCourse($IdCourse) {
        $getMemberOfCourses = User::join('user_courses', 'users.id', '=', 'user_courses.id_user')
            ->where('user_courses.id_course', $IdCourse)
            ->get();

        return $getMemberOfCourses;
    }

    public static function getCourseOfUser($IdCourse) {
        $getUserCourse = Course::where('id', $IdCourse)->first();

        return $getUserCourse;
    }

    public static function getSubjectOfUser($IdCourse) {
        $getSubjectOfUsers = Subject::select('subjects.id as IdSub', 'subjects.name', 'subjects.start_subject')
            ->join('course_subjects', 'subjects.id', '=', 'course_subjects.id_subject')
            ->where('course_subjects.id_course', $IdCourse)
            ->get();

        return $getSubjectOfUsers;
    }

    public static function getProfileMemberOfCourse($IdCourse) {
        $getProfileMemberOfCourses = User::where('id', $IdCourse)->first();

        return $getProfileMemberOfCourses;
    }

    public static function getSubjectDetail($IdSubject) {
        $getSubjectDetail = Subject::select('course_subjects.status as statusCourse', 'subjects.*')
            ->join('course_subjects', 'subjects.id', '=', 'course_subjects.id_subject')
            ->where('subjects.id', $IdSubject)
            ->first();

        return $getSubjectDetail;
    }

    public static function getTaskDetail($IdSubject) {
        $getTasks = Task::where('tasks.id_subject', $IdSubject)->paginate(config('setting.paginate'));

        return $getTasks;
    }

    public static function getIdSubject($IdSubject){
        $getID = Course_Subject::where('id_subject', $IdSubject)->first();

        return $getID;
    }

    public static function getIdOfTrainee(){
        $getId = User::Where('id', config('setting.trainee'))->get();

        return $getId;
    }
}
