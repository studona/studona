<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['name', 'description', 'data'];

    public function content_type()
    {
        return $this->belongsTo('App\ContentType', 'contentTypeId');
    }
    public function userinteractions()
    {
        return $this->belongsToMany('App\Userinteraction', 'userinteraction_contents', 'contentId', 'userInteractionId');
    }
    public function tasks()
    {
        return $this->belongsToMany('App\Task', 'task_contents', 'contentId', 'taskId');
    }
    public function topics()
    {
        return $this->belongsToMany('App\Topic', 'topic_contents', 'contentId', 'topicId');
    }
}
