@extends('layouts.master')

@section('content')

<div class="container">
	<form method="POST" action="/itineraries">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" id="name" name="name">
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<textarea class="form-control" id="description" name="description"></textarea>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>

@include('layouts.footer')

@endsection

