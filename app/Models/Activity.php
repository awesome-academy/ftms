<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = "activity_histories";
    protected $primaryKey = "id";

    public function course()
    {
        return $this->belongsTo(Course::class, 'id_course', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'id_subject', 'id');
    }
}
