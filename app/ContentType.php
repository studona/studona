<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentType extends Model
{
    protected $fillable = ['name', 'description'];

    public function contents()
    {
        return $this->hasMany('App\Content', 'contentTypeId');
    }
}
