<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = "subjects";
    protected $primaryKey = "id";
    public $timestamps = false;
    
    public function course_subject()
    {
        return $this->hasMany(Course_Subject::class, 'id_subject', 'id');
    }

    public function activity_history()
    {
        return $this->hasMany(Activity::class, 'id_subject', 'id');
    }

    public function task()
    {
        return $this->hasMany(Task::class, 'id_subject', 'id');
    }
}
