<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjectType extends Model
{
    protected $fillable = ['name'];

    public function Userinteraction()
    {
        return $this->hasMany('App\Userinteraction', 'objectTypeId');
    }
}
