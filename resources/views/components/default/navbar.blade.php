<nav class="w-full bg-white text-black py-5 border-b">
	<div class="max-w-7xl mx-auto flex flex-col px-5  md:items-center md:justify-between md:flex-row">
		<div class="flex flex-row items-center justify-between">
			<a href="/" class="text-3xl font-bold text-emerald-500">{{ config('journal.abbrev') }}</a>
			<button class="md:hidden rounded focus:outline-none focus:shadow-outline" id="nav_button">
				<svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
					<path id="menu_icon" class="" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
					<path id="close_icon" class="hidden" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg>
			</button>
		</div>
		<nav id="main_nav" class="flex-col md:justify-end md:items-center flex-grow hidden md:flex md:flex-row">
			<div class="dropdown mr-5">
				<button
					class="nav--item"
					type="button" aria-haspopup="true" aria-expanded="true">
					<span>About Journal</span>
					<svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor">
						<path fill-rule="evenodd"
							  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
							  clip-rule="evenodd"></path>
					</svg>
				</button>
				<div
					class="dropdown-menu">
					<div
						class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
						role="menu">
						<div class="py-1">
							<a href="{{ route('current') }}"
							   class="dropdown-item"
							   role="menuitem"
							   rel="noreferrer noopener"
							>
								Journal Information
							</a>
							<a href="{{ route('latest') }}"
							   class="dropdown-item"
							   role="menuitem"
							   rel="noreferrer noopener"
							>
								Editorial Board
							</a>
							<a href="{{ route('archives') }}"
							   class="dropdown-item"
							   role="menuitem"
							   rel="noreferrer noopener"
							>
								Aims & Scopes
							</a>

							<a href="{{ route('archives') }}"
							   class="dropdown-item"
							   role="menuitem"
							   rel="noreferrer noopener"
							>
								Contact
							</a>

						</div>
					</div>
				</div>
			</div>
			<div class="dropdown mr-5">
				<button
					class="nav--item"
					type="button" aria-haspopup="true" aria-expanded="true">
					<span>Articles</span>
					<svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor">
						<path fill-rule="evenodd"
							  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
							  clip-rule="evenodd"></path>
					</svg>
				</button>
				<div
					class="dropdown-menu">
					<div
						class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
						role="menu">
						<div class="py-1">
							<a href="{{ route('current') }}"
							   class="dropdown-item"
							   role="menuitem"
							   rel="noreferrer noopener"
							>
								Current Issue
							</a>
							<a href="{{ route('latest') }}"
							   class="dropdown-item"
							   role="menuitem"
							   rel="noreferrer noopener"
							>
								Latest Articles
							</a>
							<a href="{{ route('archives') }}"
							   class="dropdown-item"
							   role="menuitem"
							   rel="noreferrer noopener"
							>
								Archives
							</a>

						</div>
					</div>
				</div>
			</div>
			<div class="dropdown">
				<button
					class="nav--item"
					type="button" aria-haspopup="true" aria-expanded="true">
					<span>Login</span>
					<svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor">
						<path fill-rule="evenodd"
							  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
							  clip-rule="evenodd"></path>
					</svg>
				</button>
				<div class="dropdown-menu">
					<div
						class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
						role="menu">
						<div class="py-1">
							<a href="{{ config('journal.author_login') }}" tabindex="-1"
							   class="dropdown-item"
							   role="menuitem"
							   target="_blank"
							   rel="noreferrer noopener"
							>
								Author login
							</a>
							<a href="{{ config('journal.reviewer_login') }}" tabindex="-2"
							   class="dropdown-item"
							   role="menuitem"
							   target="_blank"
							   rel="noreferrer noopener"
							>
								Reviewer login
							</a>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
</nav>
