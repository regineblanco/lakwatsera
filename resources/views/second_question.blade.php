@extends('layouts.master')

@section('content')

<div class="second_question">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-3 interests">
				<div class="interests_category">
					<ul class="d-flex flex-column">
						<li><a href="">Arts &amp; Culture</a></li>
						<li><a href="">Food</a></li>
						<li><a href="">Shopping</a></li>
						<li><a href="">Music</a></li>
						<li><a href="">Recreation</a></li>
						<li><a href="">Nightlife</a></li>
						<li><button class="btn btn-light">I'm Done!</button></li>
					</ul>
				</div><!-- close interests_category -->
			</div><!-- close interests -->
			<div class="col-xs-12 col-md-9 interests_list">
				<p>Let's get to know you more. Tell us your interests, so we can tailor our suggestions according to them.</p>
				<div class="row">
					<div class="col-xs-12 col-md-6 interests_item">
						<img src="manila.jpg">
					</div>
					<div class="col-xs-12 col-md-6 interests_item">
						<img src="manila.jpg">
					</div>
					<div class="col-xs-12 col-md-6 interests_item">
						<img src="manila.jpg">
					</div>
					<div class="col-xs-12 col-md-6 interests_item">
						<img src="manila.jpg">
					</div>
					<div class="col-xs-12 col-md-6 interests_item">
						<img src="manila.jpg">
					</div>
					<div class="col-xs-12 col-md-6 interests_item">
						<img src="manila.jpg">
					</div>
					<div class="col-xs-12 col-md-6 interests_item">
						<img src="manila.jpg">
					</div>
					<div class="col-xs-12 col-md-6 interests_item">
						<img src="manila.jpg">
					</div>
				</div><!-- close row interests_item -->
			</div><!-- close interests_list -->
		</div><!-- close row second_question -->
	</div><!-- close container second_question -->
</div><!-- close second_quetion -->

@endsection