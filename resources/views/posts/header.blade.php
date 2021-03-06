<div>
    <a href="/post/create" class="float-right">
        <button class="bg-green-400 text-white rounded py-2 px-4">
            發表文章
        </button>
    </a>
</div>
<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        My <span class="text-blue-500">Laravel Blog</span> Test
    </h1>

    {{-- <h2 class="inline-flex mt-2">By Andy Lu <img src=""></h2> --}}

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->
        <div class="relative lg:inline-flex items-center bg-gray-100 rounded-xl">
            <x-category-dropdown :categories="$categories" :currentCategory="$currentCategory" />

            {{-- <x-dropdown>
                <x-slot name="trigger">
                    <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 flex text-left lg:inline-flex">
                        {{ $currentCategory ?? 'Category' }}
                       <x-icon name="down-arrow" />
                    </button>
                </x-slot>
                <x-dropdown-item href="/" :active="false">All</x-dropdown-item>
                @foreach ($categories as $category)
                    <x-dropdown-item href="/?category={{ $category->name }}"
                        :active='($currentCategory ?? "")  == $category->name'>
                        {{ ucwords($category->name) }}
                    </x-dropdown-item>

                @endforeach
            </x-dropdown> --}}

            {{-- <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                @foreach ($categories as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                @endforeach

            </select> --}}


        </div>

        <!-- Other Filters -->
        {{-- <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Other Filters
                </option>
                <option value="foo">Foo
                </option>
                <option value="bar">Bar
                </option>
            </select>

            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22" height="22"
                viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                    </path>
                </g>
            </svg>
        </div> --}}

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <input type="text" name="search" placeholder="Find Something" value="{{ request('search') ?? '' }}"
                    class="bg-transparent placeholder-black font-semibold text-sm">
            </form>
        </div>
    </div>
</header>
