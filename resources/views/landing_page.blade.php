@extends('layouts.master')

@section('content')
	<div class="container-fluid">

		<div class="full_page_section" id="landing_page">

			<!-- LANDING PAGE -->
			<div class="landing_page_content">
				<h3>Staying in Metro Manila for a few days? We've got you covered.</h3>
				<h3>Experience the metro like a local.</h3>
				<a href="{{ route('questions.first') }}"><button class="btn btn-light">Let's Go!</button></a>
			</div>

			<!-- NAV TWO -->
			<nav class="navbar nav_two">
				<ul class="nav d-flex justify-content-between">
					<li><a class="nav-link" href="#how_it_works">How It Works</a></li>
					<li><a class="nav-link" href="#about_us">About Us</a></li>
					<li><a class="nav-link" href="#faq">FAQ</a></li>
				</ul>
			</nav>
		</div>

		<!-- HOW IT WORKS -->
		<div class="full_page_section" id="how_it_works">
			<div class="steps">
				<ol>
					<li>Tell us how many days you're in the metro, and which city you are staying in.
						<a href=""><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
					</li>
					<li>Tick your preferences.</li>
					<li>We'll show you some spots you can check out! You'll love it, we promise.</li>
				</ol>
			</div>
		</div>

		<!-- ABOUT US -->
		<div class="full_page_section" id="about_us">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 description">
						<p>You're in Metro Manila for a few days to a week-- for work, for play, or for a layover. You want to go out and explore, but you don't know exactly where the cool spots are. That's where we come in.</p>
						<p><span>Lakwatsera</span> solves it all for you. It's your ultimate guide if you find planning too overwhelming or even tedious. Leave it to us to choose for you-- we'll give you only the hippest, nicest spots around the metropolis. All you have to take care of now is going there and having fun.</p>
						<p>What's in a name?</p>
						<p>Lakwatsera-- our Filipino parents used to say that to us when they never see us home. Simply speaking, it's a colloquial Tagalog term which pertains to a person who loves going out. A truant you may call it. But we prefer to call it wanderlust. Vagabond.</p>
					</div>
					<div class="col-xs-12 col-sm-6 founders">
						<h3>Meet the Team</h3>
						<div class="row regine">
							<div class="col-xs-3">
								<img src="regine.jpg">
							</div>
							<div class="col-xs-9">
								<h4>Regine Blanco</h4>
								<p>Founder of Lakwatsera. Born and raised in the heart of the Philippines, and enjoys going out on weeknights. Likes good music, art, food, drinks, dancing, and meeting people from around the city and around the world. Enjoys writing and coding.</p>
							</div>
						</div> <!-- close row Regine Blanco -->
						<div class="row ricky">
							<div class="col-xs-3">
								<img src="chiefboo.jpeg">
							</div>
							<div class="col-xs-9">
								<h4>Ricky Zein</h4>
								<p>The Chief Boo Boo Bear of this project (IDK what CBBB does). He is the logic, guide, and guru behind all this. Based in San Francisco, California but has gone around Manila enough to get acquainted with the area. Also the main inspiration behind this project.</p>
							</div>
						</div> <!-- close row Chief Boo Bear -->
					</div> <!-- close Meet the Team -->
				</div> <!-- close row about_us -->
			</div><!-- close container about_us -->
		</div> <!-- close about_us -->

		<!-- FAQ -->
		<div class="full_page_section" id="faq">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 question">
						<h5>What tech do you use?</h5>
						<p>Laravel</p>
					</div>
					<div class="col-xs-12 col-sm-6 question">
						<h5>What tech do you use?</h5>
						<p>Laravel</p>
					</div>
					<div class="col-xs-12 col-sm-6 question">
						<h5>What tech do you use?</h5>
						<p>Laravel</p>
					</div>
					<div class="col-xs-12 col-sm-6 question">
						<h5>What tech do you use?</h5>
						<p>Laravel</p>
					</div>
					<div class="col-xs-12 col-sm-6 question">
						<h5>What tech do you use?</h5>
						<p>Laravel</p>
					</div>
					<div class="col-xs-12 col-sm-6 question">
						<h5>What tech do you use?</h5>
						<p>Laravel</p>
					</div>
				</div><!-- close row faq -->
			</div><!-- close container faq -->
		</div><!-- close faq -->

		<!-- FOOTER -->
		@include('layouts.footer')

	</div> <!-- close body container fluid -->
@endsection
