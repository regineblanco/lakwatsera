<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Itinerary;

class ItineraryController extends Controller
{
    public function showItineraryDetails($user_id, $itinerary_id)
    {
      $user = User::find($id);
      $itinerary = Itinerary::find($id);

      return view('itineraries.details',
      ['itinerary' => $itinerary],
      );
    }
}
