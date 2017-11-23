@extends('layouts.master')

@section('content')

<div class="second_question">
	<div class="container">
		<div class="row">
			<form method="POST" action="{{ route('update.second', Auth::id()) }}">
			{{ method_field('PATCH') }}
			{{ csrf_field() }}
				<div class="col-xs-12 col-md-3 preferences">
					<div class="preferences_category">
						<ul class="d-flex flex-column">
	  					@foreach ($categories as $category)
	  						<li><button class="btn btn-light" onclick="click_category()">{{ $category->name }}</button></li>
	  					@endforeach
						</ul>
					</div><!-- close preferences_category -->
				</div><!-- close preferences -->

	    	<div class="col-xs-12 col-md-9 preferences_list">
					<p>Let's get to know you more. Tell us your interests, so we can tailor our suggestions according to them.</p>
					<div class="row">
	          @foreach ($preferences as $preference)
						<label>
						  <div class="col-xs-12 col-md-6 preferences_item">
						    <div id="checkbox_text">
						      <input type="checkbox" value="{{ $preference->id }}" name="preferences[]" />{{ $preference->name }}
						    </div>
						  </div>
						</label>
						@endforeach
					</div><!-- close row preferences_item -->
				</div><!-- close preferences_list -->
				<button type="submit" class="btn btn-light">I'm Done!</button>
			</form>
    </div><!-- close row second_question -->
	</div><!-- close container second_question -->
</div><!-- close second_question -->

@endsection
