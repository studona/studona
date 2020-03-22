<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'description'];
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_groups', 'groupId', 'userId');
    }
    public function groupCategory()
    {
        return $this->belongsTo('App\GroupCategorie', 'groupCategoryId');
    }
    public function subjects()
    {
        return $this->belongsToMany('App\Subject', 'group_subjects', 'groupId', 'subjectId');
    }
}
