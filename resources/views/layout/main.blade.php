<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>{{ env('APP_NAME', 'epublishing.io') }} {{ $title ? " | " . $title : "" }}</title>

	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Lusitana&display=swap" rel="stylesheet" />

	<link rel="stylesheet" href="{{ mix('css/app.css') }}" />
	@stack('meta')
</head>
<body class="antialiased">

	<x-default.navbar />
	@yield('content')
	<x-default.footer />

	<script src="{{ mix('js/main.js') }}"></script>
	@stack('modals')
	@stack('scripts')

</body>
</html>
