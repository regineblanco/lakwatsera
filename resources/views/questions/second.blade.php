@extends('layouts.master')

@section('content')

<div class="second_question">
	<div class="container">
		<div class="row">
			<form method="POST" action="{{ route('update.second', Auth::id()) }}">
			{{ method_field('PATCH') }}
			{{ csrf_field() }}
				<div class="col-xs-12 col-md-3 interests">
					<div class="interests_category">
						<ul class="d-flex flex-column">
	  					@foreach ($categories as $category)
	  						<li><a href="">{{ $category->name }}</a></li>
	  					@endforeach
						</ul>
					</div><!-- close interests_category -->
				</div><!-- close interests -->

	    	<div class="col-xs-12 col-md-9 interests_list">
					<p>Let's get to know you more. Tell us your interests, so we can tailor our suggestions according to them.</p>
					<div class="row">
	          @foreach ($preferences as $preference)
							<div class="col-xs-12 col-md-6 interests_item">
								<img src="{{ asset('img/manila.jpg') }}">
	              <div>
									<input type="checkbox" value="{{ $preferences->id }}" name="preferences" />{{ $preferences->name }}
								</div>
							</div>
	          @endforeach
					</div><!-- close row interests_item -->
				</div><!-- close interests_list -->
				<button type="submit" class="btn btn-light">I'm Done!</button>
			</form>
    </div><!-- close row second_question -->
	</div><!-- close container second_question -->
</div><!-- close second_question -->
