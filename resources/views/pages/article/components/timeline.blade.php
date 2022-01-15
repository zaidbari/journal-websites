<h2 class="text-2xl font-medium my-4 py-4 border-t-4 border-b-2 border-gray-800 accordion-button" data-for="article-information">
	Article information
	<svg class="w-10 h-10 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor">
		<path fill-rule="evenodd"
			  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
			  clip-rule="evenodd"></path>
	</svg>
</h2>

<div class="flex flex-col hidden" id="article-information">
	<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
		<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
			<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
				<table class="min-w-full divide-y divide-gray-200 table">
					<thead class="bg-gray-900">
					<tr class="divide-x">
						<th scope="col">Created</th>
						<th scope="col">approved</th>
						<th scope="col">revised</th>
						<th scope="col">published</th>
					</tr>
					</thead>
					<tbody class="bg-white divide-y divide-gray-200">
					<tr class=" divide-x">
						<td>
							{{ isset($data['created_at']) && $data['created_at'] != null ? \Carbon\Carbon::parse($data['created_at'])->format('j F, Y') : '' }}
						</td>
						<td>
							@if( $data['timeline'] != null && $data['timeline']['approved_at'] != null)
								{{  \Carbon\Carbon::parse($data['timeline']['approved_at'])->format('j F, Y') }}
							@else
								{{ isset($data['approved_at']) && $data['approved_at'] != null ? \Carbon\Carbon::parse($data['approved_at'])->format('j F, Y') : '' }}
							@endif

						</td>

						<td>
							@if( $data['timeline'] != null && $data['timeline']['revised_at'] != null)
								{{ \Carbon\Carbon::parse($data['timeline']['revised_at'])->format('j F, Y') }}
							@else
								{{ isset($data['revised_at']) && $data['revised_at'] != null ? \Carbon\Carbon::parse($data['revised_at'])->format('j F, Y') : '' }}
							@endif

						</td>

						<td>
							@if( $data['timeline'] != null && $data['timeline']['published_at'] != null)
								{{ \Carbon\Carbon::parse($data['timeline']['published_at'])->format('j F, Y') }}
							@else
								{{ isset($data['published_at']) && $data['published_at'] != null ? \Carbon\Carbon::parse($data['published_at'])->format('j F, Y') : '' }}
							@endif
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
