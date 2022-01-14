<h2 class="text-2xl font-medium mb-4 py-4 border-t-4 border-b-2 border-gray-800">Editor in chief</h2>
<div class="relative grid grid-cols-1 my-10 gap-4 p-4 border rounded-lg bg-white">
	<div class="relative flex gap-4">
		<img src="https://epublishing.io/storage/{{ $data['chief_editor']['avatar'] }}"
			 class="relative rounded-lg -top-8 -mb-4 bg-white border-2 border-teal-500 h-20 w-20" alt="{{ $data['chief_editor']['name'] }}" loading="lazy" />
		<div class="flex flex-col w-full">
			<div class="flex flex-row justify-between">
				<h3 class="relative font-bold">{{ $data['chief_editor']['name'] }}</h3>
			</div>
			<p class="text-gray-400 text-sm">{{ $data['chief_editor']['qualification'] }}</p>
		</div>
	</div>
	<h3 class="font-bold text-teal-500">Affiliation</h3>
	<p class="-mt-4 text-gray-500">
		@foreach($data['chief_editor']['affiliations'] as $affiliation)
			{{ $affiliation }}<br>
		@endforeach
	</p>
	<h3 class="font-bold text-teal-500">Bio</h3>
	<p class="-mt-4 text-gray-500">{!! $data['chief_editor']['bio'] !!}</p>
</div>
