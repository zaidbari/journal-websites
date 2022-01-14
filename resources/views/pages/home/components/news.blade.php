<div class="flex flex-wrap" id="tabs-id">
	<div class="w-full">
		<ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row text-2xl font-medium mb-4 py-4 border-t-4 border-b-2 border-gray-800">
			<li class="-mb-px mr-2 last:mr-0">
				<a class="pr-5 py-1 block text-teal-500 hover:underline decoration-teal-500 decoration-2 underline-offset-4 with-transition"
				   onclick="changeActiveTab(event,'tab-news')" href="javascript:void(0)">
					News
				</a>
			</li>
			<li class="-mb-px mr-2 last:mr-0">
				<a class="pr-5 py-1 block text-black hover:underline decoration-teal-500 decoration-2 underline-offset-4 with-transition"
				   onclick="changeActiveTab(event,'tab-events')" href="javascript:void(0)">
					Events
				</a>
			</li>
			<li class="-mb-px mr-2 last:mr-0">
				<a class="pr-5 py-1 block text-black hover:underline decoration-teal-500 decoration-2 underline-offset-4 with-transition"
				   onclick="changeActiveTab(event,'tab-announcements')" href="javascript:void(0)">
					Announcements
				</a>
			</li>
		</ul>
		<div class="relative content flex flex-col min-w-0 break-words bg-white w-full mb-6">
			<div class="py-5 flex-auto">
				<div class="tab-content tab-space">
					<div class="block" id="tab-news">

						<div class="flex flex-wrap">
							@forelse( $data['news'] as $news )

								<div class="w-full md:w-1/2 lg:w-1/3 px-4">
									<div class="max-w-[370px] mx-auto mb-10">
										<div class="rounded h-64 mb-8 relative bg-teal-500">
											@if( count($news['images']) > 1)
												@foreach($news['images'] as $img)
													<img class="slide rounded translate-x-0 @if( $loop->first ) translate-x-0 first @elseif( $loop->last ) last @else translate-x-full scale-0 opacity-0 @endif" src="https://epublishing.io/storage/{{ $img }}" alt="{{ $news['title'] }}"/>
												@endforeach
												<div onclick="nextSlide(event)"
													 class="absolute bottom-0 z-1 right-0 bg-white w-10 h-10 flex items-center justify-center text-black cursor-pointer next">
													&#x276F;
												</div>
												<div onclick="previousSlide(event)"
													 class="absolute bottom-0 z-1 right-0 bg-white w-10 h-10 mr-10 border-r border-gray-400 flex items-center justify-center text-black cursor-pointer previous disabled">
													&#x276E;
												</div>
											@elseif( count($news['images']) > 0 )
												<img class="slide rounded" src="https://epublishing.io/storage/{{ $news['images'][0] }}" alt="{{ $news['title'] }}"/>
											@endif
										</div>
										<div>
											<h2 class="mb-3">{{ $news['title'] }}</h2>
											<p class="text-base text-body-color">{!! $news['content'] !!}</p>
										</div>
									</div>
								</div>
							@empty
								<div class="text-center w-full">
									No news right now
								</div>
							@endforelse
						</div>

					</div>
					<div class="hidden" id="tab-events">
						<div class="flex flex-wrap">
							@forelse( $data['events'] as $event )

								<div class="w-full md:w-1/2 lg:w-1/3 px-4">
									<div class="max-w-[370px] mx-auto mb-10">
										<div class="rounded h-64 mb-8 relative bg-teal-500">
											@if( count($event['images']) > 1)
												@foreach( $event['images'] as $img )
													<img class="slide rounded translate-x-0 @if( $loop->first ) translate-x-0 first @elseif( $loop->last ) last @else translate-x-full scale-0 opacity-0 @endif" src="https://epublishing.io/storage/{{ $img }}" alt="{{ $event['title'] }}"/>
												@endforeach
												<div onclick="nextSlide(event)"
													 class="absolute bottom-0 z-1 right-0 bg-white w-10 h-10 flex items-center justify-center text-black cursor-pointer next">
													&#x276F;
												</div>
												<div onclick="previousSlide(event)"
													 class="absolute bottom-0 z-1 right-0 bg-white w-10 h-10 mr-10 border-r border-gray-400 flex items-center justify-center text-black cursor-pointer previous disabled">
													&#x276E;
												</div>
											@elseif( count($event['images']) > 0 )
												<img class="slide rounded" src="https://epublishing.io/storage/{{ $event['images'][0] }}" alt="{{ $event['title'] }}"/>
											@endif
										</div>
										<div>
											<h2 class="mb-3">{{ $event['title'] }}</h2>
											<p class="text-base text-body-color">{!! $event['content'] !!}</p>
										</div>
									</div>
								</div>
							@empty
								<div class="text-center w-full">
									No events right now
								</div>
							@endforelse
						</div>
					</div>
					<div class="hidden" id="tab-announcements">
						<div class="flex flex-wrap">
							@forelse( $data['announcements'] as $announcement )

								<div class="w-full md:w-1/2 lg:w-1/3 px-4">
									<div class="max-w-[370px] mx-auto mb-10">
										<div class="rounded h-64 mb-8 relative bg-teal-500">
											@if( count($announcement['images']) > 1)
												@foreach( $announcement['images'] as $img)
													<img class="slide rounded translate-x-0 @if( $loop->first ) translate-x-0 first @elseif( $loop->last ) last @else translate-x-full scale-0 opacity-0 @endif" src="https://epublishing.io/storage/{{ $img }}" alt="{{ $announcement['title'] }}"/>
												@endforeach
												<div onclick="nextSlide(event)"
													 class="absolute bottom-0 z-1 right-0 bg-white w-10 h-10 flex items-center justify-center text-black cursor-pointer next">
													&#x276F;
												</div>
												<div onclick="previousSlide(event)"
													 class="absolute bottom-0 z-1 right-0 bg-white w-10 h-10 mr-10 border-r border-gray-400 flex items-center justify-center text-black cursor-pointer previous disabled">
													&#x276E;
												</div>
											@elseif( count($announcement['images']) > 0 )
												<img class="slide rounded" src="https://epublishing.io/storage/{{ $announcement['images'][0] }}" alt="{{ $announcement['title'] }}"/>
											@endif
										</div>
										<div>
											<h2 class="mb-3">{{ $announcement['title'] }}</h2>
											<p class="text-base text-body-color">{!! $announcement['content'] !!}</p>
										</div>
									</div>
								</div>
							@empty
								<div class="text-center w-full">
									No announcements right now
								</div>
							@endforelse
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@once
	@push('scripts')
		<script type="text/javascript">
			function changeActiveTab(event, tabID) {
				let element = event.target;
				while (element.nodeName !== "A") {
					element = element.parentNode;
				}
				let ulElement = element.parentNode.parentNode;

				let aElements = ulElement.querySelectorAll("li > a");

				let tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
				for (let i = 0; i < aElements.length; i++) {
					aElements[i].classList.remove("text-teal-500");
					aElements[i].classList.add("text-black");
					tabContents[i].classList.add("hidden");
					tabContents[i].classList.remove("block");
				}
				element.classList.remove("text-black");
				element.classList.add("text-teal-500");
				document.getElementById(tabID).classList.remove("hidden");
				document.getElementById(tabID).classList.add("block");
			}

			function nextSlide(e) {
				let element = e.target;

				let carousel = element.parentNode.parentNode;

				let activeSlide = carousel.querySelector('.slide.translate-x-0');
				activeSlide.classList.remove('translate-x-0');
				activeSlide.classList.add('-translate-x-full');
				activeSlide.classList.add('scale-0');
				activeSlide.classList.add('opacity-0');

				let nextSlide = activeSlide.nextElementSibling;
				nextSlide.classList.remove('translate-x-full');
				nextSlide.classList.remove('scale-0');
				nextSlide.classList.remove('opacity-0');
				nextSlide.classList.add('translate-x-0');

				if (activeSlide.classList.contains('first')) carousel.querySelector('.previous').classList.remove('disabled');
				if (nextSlide.classList.contains('last')) carousel.querySelector('.next').classList.add('disabled');
				else carousel.querySelector('.next').classList.remove('disabled');
			}

			function previousSlide(e) {

				let element = e.target;

				let carousel = element.parentNode.parentNode;

				let activeSlide = carousel.querySelector('.slide.translate-x-0');
				activeSlide.classList.remove('translate-x-0');
				activeSlide.classList.add('translate-x-full');
				activeSlide.classList.add('scale-0');
				activeSlide.classList.add('opacity-0');

				let previousSlide = activeSlide.previousElementSibling;

				previousSlide.classList.remove('-translate-x-full');
				previousSlide.classList.remove('scale-0');
				previousSlide.classList.remove('opacity-0');
				previousSlide.classList.add('translate-x-0');

				if (activeSlide.classList.contains('last')) carousel.querySelector('.next').classList.remove('disabled');
				if (previousSlide.classList.contains('first')) carousel.querySelector('.previous').classList.add('disabled');
				else carousel.querySelector('.previous').classList.remove('disabled');
			}

		</script>
	@endpush

@endonce
