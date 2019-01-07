<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\SubjectHelper;
use App\Models\Subject;
use App\Http\Requests\SubjectRequest;

class SubjectStructure extends Controller
{
    /**
     * Display a listing of the resource.
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

        return view('admin.subjects.addSubject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubjectRequest $req)
    {
        $sub = new Subject();
        $sub->name = $req->name;
        $sub->description = $req->description;
        $result = $sub->save();
        if($result) {

            return redirect()->back()->with('messageAdd', trans('subject.messageAdd'));
        } else {

            return redirect()->back()->with('errorLists', trans('subject.messageError'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $getSubject = SubjectHelper::getIdOfSubject($id);
        } catch (Exception $e) {

            return redirect()->back()->with('errorLists', $e->getMessage());
        }

        return view('admin.subjects.editSubject', compact('getSubject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        try {
            $sub = Subject::findOrFail($req->id_subject);
            $sub->name = $req->name;
            $sub->description = $req->description;
            $result = $sub->save();
            if($result) {
                $req->session()->flash('messageUpadte', trans('subject.successEdit'));
            } else {
                $req->session()->flash('errorLists', trans('subject.messageError'));
            }
        } catch (Exception $e) {
            $req->session()->flash('errorLists', $e->getMessage());
        }

        return redirect()->back();
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
