<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers2\HistoryHelper;
use Auth; 

class History extends Controller
{
    public function getActivityCourse(){
	    $user = Auth::user();
	    $getIdCourse = HistoryHelper::getIdCourse($user->id);
	    $getCourse = HistoryHelper::getCourseUser($getIdCourse->IdCou);
	    $getSubjects = HistoryHelper::getSubjectUser($getIdCourse->IdCou);
	    $getTasks = HistoryHelper::getTask();
		return view('User.histories.activityCourse', compact('getCourse', 'getSubjects', 'getTasks'));
    }

    public function getMyCurrent(){
	    $user = Auth::user();
	    $getIdCourse = HistoryHelper::getIdCourse($user->id);
	    $getSubjects = HistoryHelper::getSubjectUser($getIdCourse->IdCou);
    	return view('User.histories.myCurrent', compact('getSubjects'));
    }
}
