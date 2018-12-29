<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\Hash;

class EditProfile extends Controller
{
    public function index()
    {
        return view('User.profile.profile');
    }

    public function edit(ProfileRequest $request)
    {
        $new_avatar = $this->updateAvatar($request);
        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->birthday = $request->birthday;
        $user->avatar = $new_avatar;
        $user->save();
        Session::flash('success', trans('profile.success'));

        return redirect()->route('edit_profile');
    }

    public function updateAvatar(ProfileRequest $request)
    {
        $photoName = "";
        $old_avatar = $request->old_avatar;
        $path = public_path('image/avatar/'.$old_avatar);
        if ($request->hasFile('new_avatar')) {
            if($old_avatar != 'default.png') {
                unlink($path);
            }

            $photoName = time().'.'.$request->new_avatar->getClientOriginalExtension();
            $request->new_avatar->move(public_path('image/avatar'), $photoName);
        }else{
            $photoName = $old_avatar;
        }

        return $photoName;
    }

    public function getChangePassword()
    {
        return view('User.profile.change_password');
    }

    public function postChangePassword(ChangePasswordRequest $request)
    {
        if(Hash::check($request->old_password, auth()->user()->getAuthPassword()))
        {
            $user = User::find(auth()->id());
            $user->password = bcrypt($request->new_password);
            $user->save();
            Session::flash('success', trans('profile.success'));
        }else{
            Session::flash('status', trans('profile.old_password_incorrect'));
        }

        return redirect()->route('post_change_password');
    }
}
