@extends('layouts.master')

@section('content')

<a href="{{ url('/itineraries/create') }}"><button class="btn btn-light">Add Itinerary</button></a>

@foreach ($itineraries as $itinerary)
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<a href="/itineraries/{{ $itinerary->id }}"><h1>{{ $itinerary->name }}</h1></a>
				<p>{{ $itinerary->description }}</p>
			</div>
		</div>
	</div>
@endforeach

@endsection