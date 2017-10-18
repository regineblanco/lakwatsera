<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Itinerary;

class ItineraryController extends Controller
{
    public function index()
    {
        $itineraries = Itinerary::latest()->get();

    	return view('itineraries.index', compact('itineraries'));
    }

    public function view($id)
    {
        $itinerary = Itinerary::find($id);
        //or use route model  binding, should delete the whole line above, and add Itinerary model in argument

    	return view('itineraries.view', compact('itinerary'));
    }

    public function add()
    {
    	return view('itineraries.add');
    }

    public function store()
    {
    	// $itinerary = new Itinerary;
    	// $itinerary->name = request('name');
    	// $itinerary->description = request('description');

    	// $itinerary->save();

    	//OR

		// Itinerary::create([
  //   		'name' => request('name'),
  //   		'description' => request('description')
  //   	]);

    	// Laravel is vs. mass assigning

		//OR

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

		Itinerary::create(request(['name', 'description']));

    	return redirect('/itineraries');
    }
}
