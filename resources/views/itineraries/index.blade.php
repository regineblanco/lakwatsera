@extends('layouts.master')

@section('content')

<div class="container">

  @foreach ($itineraries as $itinerary)
  <div class="itinerary">
    <img src="">
    <h3><a href="">{{ $itinerary->name }}</a></h3>
    <p>Description: {{ $itinerary->description }}</p>
    <h6>Address: {{ $itinerary->address }}</h6>
    <h6>Hours open</h6>
    <h6>Contact no.</h6>
    <h6><a href="">Website</a></h6>
    <h6><a href="">Social media</a></h6>
  </div>
  @endforeach

</div>

@endsection
