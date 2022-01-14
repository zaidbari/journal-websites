<div class="grid grid-cols-8 md:grid-cols-9 lg:grid-cols-8">
	<div class="col-span-8 md:col-span-2 lg:col-span-2 mb-5">
		<img src="https://epublishing.io/storage/{{ $data['journal']['cover'] }}" class="w-64 rounded shadow-lg"
			 alt="{{ env('JOURNAL_NAME') }} Journal Cover"/>
	</div>
	<div class="col-span-8 md:col-span-6 lg:col-span-6">
		<h1 class="font-medium mb-4">{{ env('JOURNAL_ABBREV') }}</h1>
		<p class="leading-6 mb-4">{!! $data['short_desc'] !!}</p>
		<a href="/" class="btn-primary">
			Guide for authors
			<svg width="10" height="10" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="inline ml-2"
				 aria-hidden="true" focusable="false">
				<path fill="currentColor" fill-rule="nonzero"
					  d="M.445 1.829H10.9L0 12.705 1.294 14 12.167 3.149v10.38H14V0H.445z"></path>
			</svg>
		</a>
		<a href="/" class="btn-primary-link">
			Track your article
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline ml-2"
				 viewBox="0 0 16 16">
				<path fill-rule="evenodd"
					  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
			</svg>
		</a>
		<div class="grid grid-cols-9 border-t-2 border-b-2 mt-4 md:grid-cols-9 py-5 mb-5 lg:grid-cols-9 items-center">
			@foreach( $data['metrics'] as $metrics)
				<div class="col-span-9 md:col-span-3 lg:col-span-3 py-2">
					<h3 class="text-2xl font-medium mb-3 text-teal-500 lowercase">{{ $metrics['value'] }}</h3>
					<p class="text-sm">{{ $metrics['title'] }}</p>
				</div>
			@endforeach
		</div>
		<p class="divide-x-2">
			@if( env('JOURNAL_ISSN') )
				<span class="pr-3">
					<span class="font-bold">ISSN: </span>{{ env('JOURNAL_ISSN') }}
				</span>
			@endif
			@if( env('JOURNAL_EISSN') )
				<span class="pl-3">
					<span class="font-bold">EISSN: </span>{{ env('JOURNAL_EISSN') }}
				</span>
			@endif

		</p>
	</div>
</div>
