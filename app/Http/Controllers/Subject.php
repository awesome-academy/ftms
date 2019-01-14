<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\HomeHelper;
use App\Models\Course_Subject;
use App\Mail\SendMailable;
use Auth;
use Illuminate\Support\Facades\Mail;
use Pusher\Pusher;

class Subject extends Controller
{
    /**
     * DisplFinishay a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $user = Auth::user();
        $send['name'] = $user->name;
        $getSubject = HomeHelper::getSubjectDetail($req->id_subject);
        $send['subject'] = $getSubject->name;
        $getSupervisors = HomeHelper::getSupervisor();
        foreach($getSupervisors as $getSupervisor){
            Mail::to($getSupervisor->email)->send(new SendMailable($send));
        }

        $data['title'] = 'I would like to announce ';
        $data['content'] = '$user->name have completed this subject which called $getSubject->name ';
        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $pusher->trigger('Notify', 'send-message', $data);

        $getId = HomeHelper::getIdSubject($req->id_subject);
        $finish = Course_Subject::find($getId->id);
        $finish->end_subject = now();
        $finish->status = config('setting.default');
        $result = $finish->save();
        if($result) {

            return redirect()->route('getIndex');
        } else {

            return redirect()->back();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = HomeHelper::getSubjectDetail($id);
        $getTaks = HomeHelper::getTaskDetail($id);

        return view('User.pages.subject', compact('subject','getTaks'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
