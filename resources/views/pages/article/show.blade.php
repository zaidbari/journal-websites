@extends('layout.main')

@section('content')
	<section class="max-w-7xl px-5 my-10 mx-auto">
		@include('pages.article.components.header')

		{{-- ARTICLE ABSTRACT START--}}
		<h2 class="text-2xl font-medium my-4 py-4 border-t-4 border-b-2 border-gray-800 accordion-button" data-for="article-abstract">
			Abstract
			<svg class="w-10 h-10 ml-2 -mr-1 rotate-180" viewBox="0 0 20 20" fill="currentColor">
				<path fill-rule="evenodd"
					  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
					  clip-rule="evenodd"></path>
			</svg>

		</h2>
		<div id="article-abstract">{!! $data['abstract'] !!}</div>
		{{-- ARTICLE ABSTRACT END--}}

		@include('pages.article.components.authors')
		@include('pages.article.components.citations')
		@include('pages.article.components.timeline')
	</section>
@endsection
