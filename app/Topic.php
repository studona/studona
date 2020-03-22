<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['name', 'description', 'manualPrecondition'];

    public function parent()
    {
        return $this->belongsTo('App\Topic', 'parentTopicId');
    }

    public function children()
    {
        return $this->hasMany('App\Topic', 'parentTopicId');
    }

    public function topicPreconditions()
    {
        return $this->belongsToMany('App\Topic', 'topic_preconditions', 'topicId', 'preconditionTopicId');
    }

    public function tasks()
    {
        return $this->belongsToMany('App\Task', 'topic_tasks', 'topicId', 'taskId');
    }

    public function subjects()
    {
        return $this->belongsToMany('App\Subject', 'subject_topics', 'topicId', 'subjectId');
    }
}
