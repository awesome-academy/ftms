<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Helpers\AdminHelper;

class Admin extends Controller
{
    public function viewSupervisor()
    {
        $getSupervisor = AdminHelper::getUser(config('setting.supervisor'));

        return view('admin.user.supervisor.supervisor', compact('getSupervisor'));
    }

    public function viewTrainee()
    {
        $getTrainee = AdminHelper::getUser(config('setting.trainee'));

        return view('admin.user.trainee.trainee', compact('getTrainee'));
    }
}
