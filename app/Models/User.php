<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = "users";
    protected $primaryKey = "id";

    protected $appends = ['custom_role', 'custom_gender'];

    public function user_course()
    {
        return $this->hasMany(User_Course::class, 'id_user', 'id');
    }

    public function activity_history()
    {
        return $this->hasMany(Activity::class, 'id_user', 'id');
    }

    public function setRoleAttribute($value)
    {
        $this->attributes['role'] = $value;
    }

    public function getCustomRoleAttribute()
    {
        if ($this->role == config('setting.trainee'))
        {
            return trans('home.trainee');
        }

        if ($this->role == config('setting.supervisor')) {
            return trans('home.supervisor');
        }

        if ($this->role == config('setting.admin')) {
            return trans('home.admin');
        }
    }

    public function setGenderAttribute($value)
    {
        $this->attributes['gender'] = $value;
    }

    public function getCustomGenderAttribute()
    {
        if ($this->gender == config('setting.male'))
        {
            return trans('home.male');
        }

        if ($this->role == config('setting.female')) {
            return trans('home.female');
        }
    }
}
