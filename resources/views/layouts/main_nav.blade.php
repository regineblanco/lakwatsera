<nav class="navbar nav_one">
	<div class="navbar-header">
		<div class="navbar-brand" id="logo">
			<a href="#landing_page">Lakwatsera</a>
		</div>
	</div>
	<div>
		<ul class="nav justify-content-end">
			@if (Auth::guest())
			<li class="nav-item"><a class="nav-link" href="{{ url('register') }}">Sign Up</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ url('login') }}">Log In</a></li>
			@else
			<li class="nav-item"><a class="nav-link" href="">{{ Auth::user()->name }}'s Itinerary</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Log Out</a></li>
			@endif
		</ul>
	</div>
</nav>

