<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Output\ConsoleOutput;

class Course_Subject extends Model
{
    protected $table = "course_subjects";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function course()
    {
        return $this->belongsTo(Course::class, 'id_course', 'id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'id_subject', 'id');
    }


}
