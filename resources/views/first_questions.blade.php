@extends('layouts.master')

@section('content')

<div class="first_questions">
	<div class="container">
		<form class="form-group" method="POST" action="/my_itineraries">
			<p>First, let us know how long you'll be staying here.</p>
			<select class="form-control" name="days">
		 		<option value="one">One</option>
				<option value="two">Two</option>
				<option value="three">Three</option>
				<option value="four">Four</option>
				<option value="five">Five</option>
				<option value="six">Six</option>
				<option value="seven">Seven</option>
				<option value="more_than_a_week">More than a week</option>
			</select>
			<p>Next, where are you residing? You can choose whether you want to check out spots only within your city, in the surrounding area of your city, or anywhere in Metro Manila!</p>
			<select class="form-control" name="city">
				<option value="manila">Manila</option>
				<option value="caloocan">Caloocan</option>
				<option value="lp">Las Piñas</option>
				<option value="makati">Makati</option>
				<option value="malabon">Malabon</option>
				<option value="manda">Mandaluyong</option>
				<option value="marikina">Marikina</option>
				<option value="muntinlupa">Muntinlupa</option>
				<option value="navotas">Navotas</option>
				<option value="pque">Parañaque</option>
				<option value="pasay">Pasay</option>
				<option value="pasig">Pasig</option>
				<option value="qc">Quezon City</option>
				<option value="sanjuan">San Juan</option>
				<option value="taguig">Taguig</option>
				<option value="valenzuela">Valenzuela</option>
			</select>
			<div class="proximity_options">
				<span class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="proximity" value="within"> Show places only within my city
					</label>
				</span>
				<span class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="proximity" value="surrounding"> Show those surrounding and in close proximity to my city
					</label>
				</span>
				<span class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="proximity" value="everywhere"> Doesn't matter, I'm down to go wherever in the metro!
					</label>
				</span>
			</div>
			<div class="button_holder"><button type="submit" class="btn btn-light">Next Step</button></div>
		</form>
	</div>
</div>

@endsection