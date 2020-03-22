<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userinteraction extends Model
{
    protected $fillable = ['objectId'];

    public function objectType()
    {
        return $this->belongsTo('App\ObjectType', 'objectTypeId');
    }

    public function contents()
    {
        return $this->belongsToMany('App\Content', 'userinteraction_contents', 'userInteractionId', 'contentId');
    }
}
