<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['firstname', 'surname', 'email', 'lastLogin', 'password'];
    
    public function roles()
    {
        return $this->belongsToMany('App\Role', 'user_roles', 'userId', 'roleId');
    }

    public function groups()
    {
        return $this->belongsToMany('App\Group', 'user_groups', 'userId', 'groupId');
    }

    public function subjects()
    {
        return $this->belongsToMany('App\Subject', 'subject_users', 'userId', 'subjectId');
    }

    public function tasks()
    {
        return $this->belongsToMany('App\Task', 'task_users', 'userId', 'taskId');
    }

    public function taskUsers()
    {
        return $this->hasMany('App\TaskUser', 'userId');
    }
}
