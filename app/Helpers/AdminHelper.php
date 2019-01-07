<?php

namespace App\Helpers;

use App\Models\User;
use App\Models\Subject;

class AdminHelper
{
    public static function getUser($role)
    {
        $getUser = User::where('role', $role)->paginate(config('setting.paginate'));

        return $getUser;
    }

    public static function getSubject()
    {
        $getSubject = Subject::paginate(config('setting.paginate'));

        return $getSubject;
    }
}
