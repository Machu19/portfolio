<!DOCTYPE html>
<html lang="pl">
	<head>
		@include('partials._head')
	</head>
	<body>
		<div id="background" class="mouse-bg hidden-xs hidden-sm"></div>
		<div id="background-mobile" class="bg-mobile visible-sm visible-xs"></div>
		@include('partials._nav')	 	
			@yield('content')
		<a href="#" class="scrollup"></a>
		<a href="https://www.facebook.com/kapitan.maszku" class="facebook-btn"></a>	
	 	@include('partials._footer')
		@include('partials._javascripts')
			@yield('scripts')
	</body>
</html>