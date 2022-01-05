<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">

	<title>{{ env('APP_NAME', 'epublishing.io') }} {{ $title ? " | " . $title : "" }}</title>
	@yield('meta')
</head>
<body class="antialiased">
	<x-default.navbar/>

	<main>
		@yield('content')
	</main>

	<x-default.footer/>

	@yield('modals')
	@yield('scripts')
	<script src="{{ mix('js/main.js') }}"></script>

</body>
</html>
