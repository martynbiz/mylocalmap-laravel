<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.head')
</head>
<body>
	@include('partials.header')
	
	<div id="layout_content" class="container">
		
		@include('partials.flash')
		@include ('partials.errors')
		
		@yield('content')
	</div>
	
	@include('partials.footer')
</body>
</html>
