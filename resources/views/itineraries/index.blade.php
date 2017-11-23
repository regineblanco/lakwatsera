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
      <h5><a href="">{{ $itinerary->name }}</a></h5>
      <p>Description: {{ $itinerary->description }}</p>
      <h6>Address: {{ $itinerary->address }}</h6>
      <h6>Hours open</h6>
      <h6>Contact no.</h6>
      <h6><a href="">Website</a></h6>
      <h6><a href="">Social media</a></h6>
    </div>
    @endforeach

    <div class="tab-pane" id="day2" role="tabpanel">
      Hello world
    </div>

  </div>

</div>

@endsection
