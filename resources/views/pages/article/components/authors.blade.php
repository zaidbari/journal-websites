<h2 class="text-2xl font-medium my-4 py-4 border-t-4 border-b-2 border-gray-800 accordion-button" data-for="author-information">
	Authors information
	<svg class="w-10 h-10 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor">
		<path fill-rule="evenodd"
			  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
			  clip-rule="evenodd"></path>
	</svg>
</h2>

<div class="divide-y hidden" id="author-information">
	@foreach($data['authors'] as $author)
		<div class="py-3">
			<h3 class="serif">{{ $author['title'] }} {{ $author['name'] }}
				@if($author['info'] != null)
					<span class="text-sm font-bold text-teal-500">
						({{ $author['info']['corresponding'] == true ? 'corresponding' : '' }})
					</span>
				@endif
			</h3>
			<p>{{ $author['affiliation'] }}</p>
		</div>
	@endforeach
</div>
