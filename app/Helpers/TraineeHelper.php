<?php
/**
 * Created by PhpStorm.
 * User: ducthien
 * Date: 07/01/2019
 * Time: 14:08
 */

namespace App\Helpers;
use App\Models\User;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\TraineeRequest;

class TraineeHelper
{
    public static function getIdOfTrainee($IdTrainee)
    {
        $getId = User::findOrFail($IdTrainee);

        return $getId;
    }

    public static function updateAvatar(ProfileRequest $request)
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
        } else {
            $photoName = $old_avatar;
        }

        return $photoName;
    }
}
