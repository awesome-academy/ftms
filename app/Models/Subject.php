<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Subject extends Model
{
    protected $table = "subjects";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $dates = ['custom_start_subject', 'custom_end_subject'];

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

    public function getCustomStartSubjectAttribute()
    {
        return Carbon::parse($this->start_subject)->format(config('setting.date_format'));
    }

    public function getCustomEndSubjectAttribute()
    {
        if ($this->end_subject == null)
        {
            return null;
        }

        return $this->end_subject->format(config('setting.date_format'));
    }
}
