@extends('layout.main')

@section('content')
	<section class="max-w-7xl px-5 my-10 mx-auto">
		<x-default.article-list :articles="$data" :type="$title"/>

	</section>
@endsection
