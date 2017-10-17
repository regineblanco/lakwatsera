<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Itinerary;

class ItineraryController extends Controller
{
    public function index()
    {
    	return view('itineraries.index');
    }

    public function view()
    {
    	return view('itineraries.view');
    }

    public function add()
    {
    	return view('itineraries.add');
    }

    public function store()
    {
    	$itinerary = new Itinerary;
    	$itinerary->name = request('name');
    	$itinerary->description = request('description');

    	$itinerary->save();

    	return redirect('/itineraries');
    }
}
