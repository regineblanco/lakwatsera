<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];


    public function interests()
    {
   	return $this->hasMany('App\Interest');
   	}
}
