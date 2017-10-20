<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Lakwatsera</title>

	<!-- FONT AWESOME & GOOGLE FONTS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  	<!-- PERSONAL STYLE -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">
</head>
<body>

	@include('layouts.main_nav')

	@yield('content')

	<script src="{{ asset('js/myjavascript.js') }}"></script>

</body>
</html>