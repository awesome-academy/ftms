<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Course extends Model
{
    protected $table = "courses";
    protected $primaryKey = "id";
    protected $appends = ['custom_status'];
    protected $dates = ['custom_started_at', 'custom_finished_at'];

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

    public function getCustomStatusAttribute()
    {

        if ($this->status == config('setting.open_course'))
        {

            return trans('admin.open_course');
        } elseif ($this->status == config('setting.active_course')) {

            return trans('admin.active_course');
        } elseif ($this->status == config('setting.close_course')) {

            return trans('admin.close_course');
        }
    }
    
    public function getCustomStartedAtAttribute()
    {
        return Carbon::parse($this->started_at)->format(config('setting.date_format'));
    }

    public function getCustomFinishedAtAttribute()
    {
        if($this->finished_at == null)
        {
            return null;
        } else {

            return Carbon::parse($this->finished_at)->format(config('setting.date_format'));
        }
    }
}
