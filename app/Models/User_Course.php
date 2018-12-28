<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_Course extends Model
{
    protected $table = "user_courses";
    protected $primaryKey = "id";

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'id_course', 'id');
    }
}
