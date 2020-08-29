<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') - Admin Page</title>

	@stack('styles')
</head>
<body>
	<main>
		<div class="container">@yield('content')</div>
	</main>

	@stack('scripts')
</body>
</html>