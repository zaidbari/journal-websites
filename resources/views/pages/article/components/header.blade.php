{{-- ARTICLE HEADER START--}}
<div class="flex md:flex-row flex-col justify-between items-center">
	<p class="text-sm divide-x-2">
		<span class="font-bold pr-2 text-teal-500">{{ $data['type'] }}</span>
		<span class="pl-2"><span class="font-bold">Published: </span>
					@if( $data['timeline'] != null)
				{{ \Carbon\Carbon::parse($data['timeline']['published_at'])->format('j F, Y') }}
			@else
				{{ \Carbon\Carbon::parse($data['published_at'])->format('j F, Y') }}
			@endif
				</span>
	</p>
	<div class="divide-x-2 flex">
		<div class="">
			@if($data['previous'] != null)
				<a href="{{ route('article', $data['previous']['id']) }}" class="btn-primary-link">Previous article</a>
			@endif
		</div>
		<div class="pl-4">
			@if($data['next'] != null)
				<a href="{{ route('article', $data['next']['id']) }}" class="btn-primary-link">Next article</a>
			@endif
		</div>
	</div>
</div>
{{-- ARTICLE HEADER END--}}
{{-- ARTICLE TITLE--}}
<h1 class="text-3xl font-medium mb-2 mt-3 serif">{!! $title !!}</h1>

{{-- AUTHORS START--}}
<div class="flex flex-wrap">
	@foreach($data['authors'] as $author)
		<div class="dropdown mr-2">
			<button class="nav--item" type="button" aria-haspopup="true" aria-expanded="true">
				{{ $author['name'] }}
				@if($author['info'] != null)
					{{ $author['info']['corresponding'] == true ? '*' : '' }}
				@endif
				@if(!$loop->last), @endif
			</button>
			<div class="dropdown-menu z-10">
				<div
					class="absolute p-4 w-[300px] mt-2 origin-top-right bg-white divide-y divide-gray-100 rounded-md shadow-lg outline-none">
					<div class="py-1">
						<h4 class="font-bold text-md">{{ $author['title'] }} {{ $author['name'] }}</h4>
						<span class="text-sm italic block mb-2">
									@if($author['info'] != null)
								{{ $author['info']['corresponding'] == true ? '(corresponding)' : '' }}
							@endif
								</span>
						<p class="text-sm">{{ $author['affiliation'] }}</p>
					</div>
				</div>
			</div>
		</div>
	@endforeach
</div>
{{-- AUTHORS END--}}

{{-- ARTICLE METADATA START--}}
<hr class="mt-4 mb-4">
<div class="flex md:flex-row flex-col justify-between items-center">
	<p>
		@if($data['volume'] != null)
			<span class="font-bold">Volume: </span>{{ $data['volume'] }},
		@endif
		@if($data['issue'] != null)
			<span class="font-bold">Issue: </span>{{ $data['issue'] }},
		@endif
		@if($data['first_page'] != null && $data['last_page'] != null)
			<span class="font-bold">Page: </span>({{ $data['first_page'] }}-{{ $data['last_page'] }}),
		@endif
		@if($data['doi'] != null)
			<span class="font-bold">DOI: </span>
			<a href="https://doi.org/{{ $data['doi'] }}"
			   target="_blank"
			   rel="noreferrer noopener"
			   class="link"
			>
				{{ $data['doi'] }}
			</a>
		@endif
	</p>
	<a href="{{ '/' }}" class="btn-danger-link">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline mr-2" viewBox="0 0 16 16">
			<path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
			<path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
		</svg>
		Preview pdf
	</a>
</div>
{{-- ARTICLE METADATA END--}}
