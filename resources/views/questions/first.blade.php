@extends('layouts.master')

@section('content')

<div class="first_questions">
	<div class="container">
		<form class="form-group" method="POST" action="{{ route('update.first', Auth::id()) }}">
			{{ method_field('PATCH') }}
			{{ csrf_field() }}
			<p>First, let us know how long you'll be staying here.</p>
			<select class="form-control" name="days">
		 		<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
			</select>
			<p>Next, where are you residing? You can choose whether you want to check out spots only within your city, in the surrounding area of your city, or anywhere in Metro Manila!</p>
			<select class="form-control" name="city_id">
				@foreach ($cities as $city)
					<option value="{{ $city->id }}">{{ $city->name }}</option>
				@endforeach
			</select>
			<div class="proximity_options">
				<span class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="proximity_options" value="within"> Show places only within my city
					</label>
				</span>
				<span class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="proximity_options" value="surrounding"> Show those surrounding and in close proximity to my city
					</label>
				</span>
				<span class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="proximity_options" value="everywhere"> Doesn't matter, I'm down to go wherever in the metro!
					</label>
				</span>
			</div>
			<div class="button_holder"><button type="submit" class="btn btn-light">Next Step</button></div>
		</form>
	</div>
</div>

@endsection
