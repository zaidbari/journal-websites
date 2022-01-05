@extends('layout.main')

@section('content')
	<header class="py-10 max-w-7xl px-5 mx-auto">
		<div class="grid grid-cols-8 md:grid-cols-9 lg:grid-cols-8">
			<div class="col-span-8 md:col-span-2 lg:col-span-2 mb-5">
				<img src="https://epublishing.io/storage/uploads/journals/5/branding/hj3keyWtUI59kUScSXrdPY3lQz0Hh9jkRONfwvRX.jpg" class="w-64 rounded shadow-lg" alt="{{ env('APP_NAME') }} Journal Cover" />
			</div>
			<div class="col-span-8 md:col-span-6 lg:col-span-6">
				<h1 class="text-2xl font-medium mb-4">{{ env('APP_NAME') }}</h1>
				<p class="leading-6 mb-4">BioMedica is an international peer-reviewed medical journal. This is an official journal of the University of Health Sciences, Lahore, Pakistan.</p>
				<a href="/" class="btn-primary">
					Guide for authors
					<svg width="10" height="10" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="inline ml-2" aria-hidden="true" focusable="false">
						<path fill="currentColor" fill-rule="nonzero" d="M.445 1.829H10.9L0 12.705 1.294 14 12.167 3.149v10.38H14V0H.445z"></path>
					</svg>
				</a>
				<a href="/" class="btn-primary-link">
					Track your article
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline ml-2" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
					</svg>
				</a>
				<div class="grid grid-cols-9 border-t-2 border-b-2 mt-4 md:grid-cols-9 py-5 mb-5 lg:grid-cols-9 items-center">
					<div class="col-span-9 md:col-span-3 lg:col-span-3 py-2">
						<h3 class="text-2xl font-medium mb-3 lowercase">27 Days</h3>
						<p class="text-sm">From submission to first editorial decision</p>
					</div>
					<div class="col-span-9 md:col-span-3 lg:col-span-3 py-2">
						<h3 class="text-2xl font-medium mb-3 lowercase">27 Days</h3>
						<p class="text-sm">From submission to first editorial decision</p>
					</div>
					<div class="col-span-9 md:col-span-3 lg:col-span-3 py-2">
						<h3 class="text-2xl font-medium mb-3 lowercase">27 Days</h3>
						<p class="text-sm">From submission to first editorial decision</p>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="max-w-7xl px-5 mx-auto">
		<x-default.article-list :articles="$articles" />
	</section>
@endsection
