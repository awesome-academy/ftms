<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses";
    protected $primaryKey = "id";

    public function user_course()
    {
        return $this->hasMany(User_Course::class, 'id_course', 'id');
    }

    public function activity_history()
    {
        return $this->hasMany(Activity::class, 'id_course', 'id');
    }

    public function course_subject()
    {
        return $this->hasMany(Course_Subject::class, 'id_course', 'id');
    }

}
