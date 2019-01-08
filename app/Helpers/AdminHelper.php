<?php

namespace App\Helpers;

use App\Models\User;
use App\Models\Course;


class AdminHelper
{
    public static function getUser($role)
    {
        $getUser = User::where('role', $role)->paginate(config('setting.paginate'));

        return $getUser;
    }

    public static function getCourse()
    {
        $getCourse = Course::paginate(config('setting.paginate'));

        return $getCourse;
    }
}
