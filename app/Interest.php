<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $guarded = [];

    public function category()
    {
    return $this->belongsTo('App\Category');
	  }

    //Get the users with the given interest

    public function users() //$interest->users
    {
      return $this->belongsToMany('App\User');
    }
}
