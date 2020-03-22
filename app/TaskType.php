<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskType extends Model
{
    protected $fillable = ['type'];

    public function tasks()
    {
        return $this->hasMany('App\Task', 'taskTypeId');
    }
}
