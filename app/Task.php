<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'description', 'dueUntil', 'data'];

    public function topics()
    {
        return $this->belongsToMany('App\Topic', 'topic_tasks', 'taskId', 'topicId');
    }
    public function contents()
    {
        return $this->belongsToMany('App\Content', 'task_contents', 'taskId', 'contentId');
    }
    public function users()
    {
        return $this->belongsToMany('App\User', 'task_users', 'taskId', 'userId');
    }
    public function taskType()
    {
        return $this->belongsTo('App\TaskType', 'taskTypeId');
    }
    public function taskUsers()
    {
        return $this->hasMany('App\TaskUser', 'taskId');
    }
}
