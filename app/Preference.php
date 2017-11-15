<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    protected $guarded = [];

    public function category()
    {
    return $this->belongsTo('App\Category');
	  }

    //Get the users with the given preferences
    public function users() //$preference->users
    {
      return $this->belongsToMany('App\User');
    }

    public function itineraries()
    {
      return $this->hasMany('App\Itinerary');
    }
}
