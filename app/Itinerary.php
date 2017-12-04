<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
  public function preference()
  {
    return $this->belongsTo('App\Preference');
  }

    public function users() //itinerary->users
    {
      // return $this->belongsToMany('App\User');
      return $this->preference()->users();
    }
}
