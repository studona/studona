<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupCategorie extends Model
{
    protected $fillable = ['name', 'description'];
    public function groups()
    {
        return $this->hasMany('App\Group', 'groupCategoryId');
    }
}
