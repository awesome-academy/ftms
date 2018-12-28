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

    public function user_course()
    {
        return $this->hasMany(User_Course::class, 'id_user', 'id');
    }

    public function activity_history()
    {
        return $this->hasMany(Activity::class, 'id_user', 'id');
    }
}
