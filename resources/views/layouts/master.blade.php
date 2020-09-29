<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce</title>
	@include('partials.styles')
</head>
<body>
<div class="wrapper">
	{{-- Navigation --}}
	
@include('partials.nav')
@yield('content')


@include('partials.footer')
</div>
</div>

@include('partials.scripts')
</body>
</html>