<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = "tasks";
    protected $primaryKey = "id";

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'id_subject', 'id');
    }
}
