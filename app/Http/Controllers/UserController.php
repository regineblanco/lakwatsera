<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(User $user)
    {
        $cities = City::all->get()
    	$user->days = request('days');
    	$city->name = request('city');
    	// $user->proximity = request('proximity');

    	$user->save();
    	$city->save();
    	return('questions.first', compact('user'));
    	//[ 'user' => $user ] - can use this instead of compact 
    }
}
