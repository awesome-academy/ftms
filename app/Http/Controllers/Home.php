<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Helpers\HomeHelper;
use App\Models\Task;
use App\Models\Subject;
use Auth;

class Home extends Controller
{
    public function getIndex(){
        $user = Auth::user();
        $getIdCourse = HomeHelper::getIdOfCourse(1);
        $getMembers = HomeHelper::getMemberOfCourse($getIdCourse->IdCou);
        $getCourse = HomeHelper::getCourseOfUser($getIdCourse->IdCou);
        $getSubjects = HomeHelper::getSubjectOfUser($getIdCourse->IdCou);
    	return view('User.index',compact('getMembers','getCourse','getSubjects'));
    }

    public function getMemberProfile(Request $req){
        $member = HomeHelper::getProfileMemberOfCourse($req->id);
        // dd($member);
    	return view('User.page.memberProfile',compact('member'));
    }

    public function getSubject(Request $req){
        $subject = HomeHelper::getSubjectDetail($req->id);
        $getTaks = HomeHelper::getTaskDetail($req->id);
        return view('User.page.subject',compact('subject','getTaks'));
    }

    public function postTask(TaskRequest $req){
        $newTask = new Task;
        $newTask->name = $req->title;
        $newTask->description = $req->description;
        $newTask->id_subject = $req->id;
        $newTask->save();
        return redirect()->route('getSubject', ['id' => $req->id])->with(['flag'=>'success','message'=>trans('home.Message')]);
    }

    public function postFinish(Request $req){
        $finish = Subject::find($req->id);
        $finish->end_subject = now();
        $finish->status = 0;
        $finish->save();
        return redirect()->route('getIndex');
    }

    public function getMyCalendar(){
        return view('User.page.myCalendar');
    }
}
