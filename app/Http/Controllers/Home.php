<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\HomeHelper;
use Auth;

class Home extends Controller
{
    public function getIndex(){
        $user = Auth::user();
        $getIdCourse = HomeHelper::getIdOfCourse($user->id);
        $getMembers = HomeHelper::getMemberOfCourse($getIdCourse->IdCou);
        $getCourse = HomeHelper::getCourseOfUser($getIdCourse->IdCou);
        $getSubjects = HomeHelper::getSubjectOfUser($getIdCourse->IdCou);

        return view('User.index', compact('getMembers', 'getCourse', 'getSubjects'));
    }
}
