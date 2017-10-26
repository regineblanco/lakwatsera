<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\City;

class UserController extends Controller
{

    public function view()
    {
        $cities = City::all();
        return view('questions.first', compact('cities'));
    }

    // TODO: Delete
    public function store(User $user, $city)
    {
      $cities = City::all();
    	$user->days = request('days');
    	$city->name = request('city');
    	// $user->proximity = request('proximity');

    	$user->save();
    	$city->save();
    	return view('questions.second');
    	//[ 'user' => $user ] - can use this instead of compact
    }


    public function update($id)
    {
      $user = User::find($id);
      $user->days = request('days');
      $user->city_id = request('city_id');
      $user->save();

      // Now to go to the second set of questions
      return view('questions.second');
    }
}
