<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\HistoryHelper;
use Auth;

class History extends Controller
{
    public function getActivityCourse(){
        $user = Auth::user();
        $getIdCourse = HistoryHelper::getIdOfCourse($user->id);
        $getCourse = HistoryHelper::getCourseOfUser($getIdCourse->IdCourse);
        $getSubjects = HistoryHelper::getSubjectOfUser($getIdCourse->IdCourse);
        $getTasks = HistoryHelper::getTask();
        return view('User.histories.activityCuosre', compact('getCourse', 'getSubjects', 'getTasks'));
    }

    public function getMyCurrent(){
        $user = Auth::user();
        $getIdCourse = HistoryHelper::getIdOfCourse($user->id);
        $getSubjects = HistoryHelper::getSubjectOfUser($getIdCourse->IdCourse);
        return view('User.histories.myCurrent', compact('getSubjects'));
    }
}
