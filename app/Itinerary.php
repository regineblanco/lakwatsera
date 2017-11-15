<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    public function users() //itinerary->users
    {
      return $this->belongsToMany('App\User');
    }
}
