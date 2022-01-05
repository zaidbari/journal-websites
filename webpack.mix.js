const mix = require('laravel-mix');

mix
	.js('resources/js/app.js', 'public/js')
	.js('resources/js/main.js', 'public/js')
	.postCss('resources/css/app.css', 'public/css', [
		require('postcss-import'),
		require("tailwindcss"),
	])

if (mix.inProduction()) mix.version()
