<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function preferences() //$user->preferences
    {
      return $this->belongsToMany('App\Preference');
    }

    public function itineraries() //$user->itineraries
    {
      $preferences = $this->preferences()->get();

      $itineraries = array();

      foreach ($preferences as $preference) {
        // $preference_itineraries = $preference->itineraries()->get();
        // array_push($itineraries, $preference_itineraries);

        $preference_itineraries = $preference->itineraries()->get();
        $itineraries = array_merge($itineraries, (array)$preference_itineraries);    
        //we want to merge the two arrays instead of putting one array into another
      }

      return $itineraries;
    }
}
