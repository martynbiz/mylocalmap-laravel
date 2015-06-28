<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.head')
</head>
<body>
	@include('partials.header')
	
	<div id="layout_content" class="container">
		@yield('content')
	</div>
	
	@include('partials.footer')
</body>
</html>
