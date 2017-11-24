@extends('layouts.master')

@section('content')

<div class="container">

  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="day1">Day 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="day2">Day 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#">Day 3</a>
    </li>
  </ul>


  <div class="itinerary tab-content row">
    @foreach ($itineraries as $itinerary)
    <div class="tab-pane active col-xs-12 col-sm-6" id="day1" role="tabpanel">
      <img src="">
      <h5><a href="{{ route('itineraries.details') }}">{{ $itinerary->name }}</a></h5>
      <p>Description: {{ $itinerary->description }}</p>
      <button class="btn btn-light"><a href="{{ route('itineraries.details') }}">Read More</a></button>
    </div>
    @endforeach

    <div class="tab-pane" id="day2" role="tabpanel">
      Hello world
    </div>

  </div>

</div>

@endsection
