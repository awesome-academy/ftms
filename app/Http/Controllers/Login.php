<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index()
    {
        return view('User.login.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $login = [
            'email' => $request->txtEmail,
            'password' => $request->txtPassword,
        ];

        if(Auth::attempt($login)){
            if(auth()->user()->role == config('setting.trainee')){

                return redirect()->route('getIndex');
            } else {

                return redirect()->route('supervisor.index');
            }
        } else {

            return redirect()->back()->with('status', trans('login.status'))->withInput();
        }
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect()->route('getLogin');
    }
}
