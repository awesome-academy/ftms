<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\AdminHelper;
use App\Models\User;
use App\Http\Requests\TraineeRequest;
use App\Helpers\TraineeHelper;
use App\Http\Requests\ProfileRequest;

class Trainee extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getTrainee = AdminHelper::getUser(config('setting.trainee'));

        return view('admin.user.trainee.trainee', compact('getTrainee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.trainee.addTrainee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TraineeRequest $req)
    {
        $trainee = new user();
        $trainee->name = $req->name;
        $trainee->address = $req->address;
        $trainee->phone = $req->phone;
        $trainee->email = $req->email;
        $trainee->password = $req->password;
        $trainee->gender = $req->gender;
        $trainee->birthday = $req->birthday;
        $trainee->avatar = 'default.png';
        $trainee->role = config('setting.trainee');
        $result = $trainee->save();
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
            $getTrainee = TraineeHelper::getIdOfTrainee($id);
        } catch (Exception $e) {

            return redirect()->back()->with('errorLists', $e->getMessage());
        }

        return view('admin.user.trainee.editTrainee', compact('getTrainee'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $req, $id)
    {
        try {
            $new_avatar = TraineeHelper::updateAvatar($req);
            $user = User::findOrFail($req->id_trainee);
            $user->name = $req->name;
            $user->address = $req->address;
            $user->phone = $req->phone;
            $user->gender = $req->gender;
            $user->birthday = $req->birthday;
            $user->avatar = $new_avatar;
            $result = $user->save();
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
