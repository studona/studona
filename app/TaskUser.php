<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskUser extends Model
{
    public function task()
    {
        return $this->belongsTo('App\Task', 'taskId');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'userId');
    }
}
