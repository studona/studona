<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name', 'description'];

    public function topics()
    {
        return $this->belongsToMany('App\Topic', 'subject_topics', 'subjectId', 'topicId');
    }
    public function groups()
    {
        return $this->belongsToMany('App\Group', 'group_subjects', 'subjectId', 'groupId');
    }
    public function users()
    {
        return $this->belongsToMany('App\User', 'subject_users', 'subjectId', 'userId');
    }
}
