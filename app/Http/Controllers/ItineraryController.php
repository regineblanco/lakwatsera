<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItineraryController extends Controller
{
    public function index()
    {
    	return view('my_itineraries');
    }

    public function view()
    {
    	return view('view_itinerary');
    }
}
