<?php

namespace App\Helpers;

use App\Models\User;

class AdminHelper
{
    public static function getUser($role)
    {
        $getUser = User::where('role', $role)->paginate(config('setting.paginate'));

        return $getUser;
    }
}
