<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\HomeHelper;
use App\Models\Course_Subject;

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
