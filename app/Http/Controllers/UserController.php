<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\City;
use App\Category;
use App\Interest;

class UserController extends Controller
{

    public function viewFirstQ()
    {
        $cities = City::all();

        return view('questions.first', compact('cities'));
    }

    // TO DO: Delete
    // public function store(User $user, $city)
    // {
    //   $cities = City::all();
    // 	$user->days = request('days');
    // 	$city->name = request('city');
    // 	// $user->proximity = request('proximity');

    // 	$user->save();
    // 	$city->save();
    // 	return view('questions.second');
    // 	//[ 'user' => $user ] - can use this instead of compact
    // }


    public function viewSecondQ($id)
    {
      $user = User::find($id);
      $user->days = request('days');
      $user->city_id = request('city_id');
      $user->proximity_preference = request('proximity_preference');
      $user->save();

      $categories = Category::all();
      $interests = Interest::all();

      // Now to go to the second set of questions
      return view('questions.second',
        ['categories' => $categories],
        ['interests' => $interests]
      );
    }

    public function updateUserSettings($id)
    {
      // $user = User::find($id);
      // $user->
    }
}
