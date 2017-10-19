@extends('layouts.master')

@section('content')

<a href="{{ url('/itineraries/create') }}"><button class="btn btn-light">Add Itinerary</button></a>

@foreach ($itineraries as $itinerary)
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<a href="/itineraries/{{ $itinerary->id }}">
					<h4>{{ $itinerary->name }}</h4>
				</a>
				<p>{{ $itinerary->description }}</p>
			</div>
		</div>
	</div>
@endforeach

<div class="container">
	<ul class="nav nav-tabs">
		<li class="nav-item">
			<a class="nav-link active" href="#">Day 1</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Day 2</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Day 3</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Day 4</a>
		</li>
	</ul>
</div>

@endsection