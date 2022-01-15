<h2 class="text-2xl font-medium my-4 py-4 border-t-4 border-b-2 border-gray-800 accordion-button" data-for="article-citations">
	Cite this article
	<svg class="w-10 h-10 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor">
		<path fill-rule="evenodd"
			  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
			  clip-rule="evenodd"></path>
	</svg>
</h2>

<div class="hidden" id="article-citations">

<h2 class="serif">Harvard Style</h2>
<div class="mb-3 pb-3 border-b">
	<p>
		{{--TODO: Split the names like ( (First Letter of last name Capitalized), First_name )--}}
		@foreach($data['authors'] as $author)
			{{ $loop->last ? ' & ' : '' }}
			{{ $author['name'] }}{{ $loop->last ? '' : ', ' }}
		@endforeach,
		@if( $data['timeline'] != null)
			{{ \Carbon\Carbon::parse($data['timeline']['published_at'])->format('Y') }}
		@else
			{{ \Carbon\Carbon::parse($data['published_at'])->format('Y') }}
		@endif. {!! $data['title'] !!}. {{ env('JOURNAL_NAME') }},
		@if( $data['timeline'] != null)
			{{ \Carbon\Carbon::parse($data['timeline']['published_at'])->format('d M') }}
		@else
			{{ \Carbon\Carbon::parse($data['published_at'])->format('d M') }}
		@endif, {{ $data['volume'] }}({{ $data['issue'] }}), pp. {{ $data['first_page'] }}-{{ $data['last_page'] }}.
		@if($data['doi'] != null)
			<span>doi: </span>
			<a href="https://doi.org/{{ $data['doi'] }}"
			   target="_blank"
			   rel="noreferrer noopener"
			   class="link"
			>
				https://doi.org/{{ $data['doi'] }}
			</a>
		@endif
	</p>
</div>
</div>
