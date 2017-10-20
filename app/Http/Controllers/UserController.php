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

    public function store(User $user, $city)
    {
        $cities = City::all();
    	$user->days = request('days');
    	$city->name = request('city');
    	// $user->proximity = request('proximity');

    	$user->save();
    	$city->save();
    	return view('questions.second', compact('user', 'city'));
    	//[ 'user' => $user ] - can use this instead of compact 
    }
}
