<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{

    protected $fillable = [
        'user_id',
        'task_id'
    ];

    function user(){
        return $this->belongsTo(User::class);
    }

    function task(){
        return $this->belongsTo(Task::class);
    }
}
