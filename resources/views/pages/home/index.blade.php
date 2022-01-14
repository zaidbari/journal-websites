@extends('layout.main')

@section('content')
	<header class="py-10 max-w-7xl px-5 mx-auto">
		@include('pages.home.components.header')
	</header>

	<section class="max-w-7xl px-5 mx-auto">
		@include('pages.home.components.news')
	</section>

	<section class="max-w-7xl px-5 mx-auto">
		<x-default.article-list :articles="$data['featured_articles']" type="Featured articles"/>
	</section>
	<section class="max-w-7xl px-5 mx-auto">
		<x-default.article-list :articles="$data['articles']" type="Latest articles"/>
	</section>

	<section class="max-w-7xl px-5 mx-auto">
		@include('pages.home.components.chief')
	</section>

@endsection

