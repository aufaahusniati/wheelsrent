<nav class="w-[calc(100%-256px)] mt-6 ml-64">
    <div class="flex items-center justify-center">
        <div class="translate-x-[260px]">
            <span class="text-black font-extrabold text-3xl mb-2">Wheelsrent's Dashboard</span>
            <div class="mt-2 border-primary border-t-4 w-40 flex flex-wrap items-center justify-center text-center mx-auto"></div>
        </div>
        <div class="ml-[470px]">
            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-gray-60 hover:bg-primary hover:bg-opacity-20 rounded-3xl text-sm px-2 py-2 text-center inline-flex items-center" type="button">
                <p class="font-semibold">Hello, {{ auth()->user()->name }}</p>
                <svg class="w-5 h-5 pt-3 ml-1 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                </svg>
            </button>

        <!-- Dropdown menu -->
            <div id="dropdownHover" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44">
                @auth

                <ul class=" py-2 text-sm text-gray-700" aria-labelledby="dropdownHoverButton">
                    <li>
                        <span class="flex items-center p-4 text-sm border-b border-b-black py-2">{{ auth()->user()->email }}</span>
                    </li>
                    <li>
                        <a href="/" class="px-4 py-2 hover:bg-gray-100 flex">
                            <svg class="w-5 h-5 text-gray-800 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8v10a1 1 0 0 0 1 1h4v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5h4a1 1 0 0 0 1-1V8M1 10l9-9 9 9" />
                            </svg><span class=" ml-2 text-sm">Home</span>
                        </a>

                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="px-4 py-2 hover:bg-gray-100 flex">
                                <svg class="w-5 h-5 mt-1 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3" />
                                </svg><span class="ml-2 text-sm">Logout</span>
                            </button>
                        </form>
                    </li>
                </ul>
                @endauth
            </div>
        </div>
    </div>
</nav>

{{--  End navbar --}}