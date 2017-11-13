<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];


    public function preferences()
    {
   	return $this->hasMany('App\Preference');
   	}
}
