<nav class="w-[calc(100%-256px)] mt-3 ml-64">
    <div class="py-4 px-6 flex items-center justify-center">
        <div class="translate-x-[260px]">
            <span class="text-black font-extrabold text-3xl mb-2">Wheelsrent's Dashboard</span>
            <div class="mt-2 border-primary border-t-4 w-40 flex flex-wrap items-center justify-center text-center mx-auto"></div>
        </div>
        <div class="ml-[500px]">
            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-gray-60 hover:bg-primary hover:bg-opacity-20 rounded-3xl text-sm px-2 py-2 text-center inline-flex items-center" type="button">
                <img class="w-10 h-10 rounded-full" src="/img/contoh_foto.jpeg" alt="Rounded avatar">
                <svg class="w-5 h-5 pt-3 ml-1 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                </svg>
            </button>

        <!-- Dropdown menu -->
            <div id="dropdownHover" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class=" py-2 text-sm text-gray-700" aria-labelledby="dropdownHoverButton">
                    <li>
                        <span class="flex items-center font-semibold p-4 text-sm py-1">Name</span>
                    </li>
                    <li>
                        <span class="flex items-center p-4 text-sm border-b border-b-black py-2">@Email</span>
                    </li>
                    <li>
                        <a href="/"
                            class="px-4 py-2 hover:bg-gray-100 flex">
                            <svg class="w-5 h-5 text-gray-800 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8v10a1 1 0 0 0 1 1h4v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5h4a1 1 0 0 0 1-1V8M1 10l9-9 9 9" />
                            </svg><span class=" ml-2 text-sm">Home</span>
                        </a>
                        <a href="#"
                            class="px-4 py-2 hover:bg-gray-100 flex">
                            <svg class="w-5 h-5 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                                <path d="M7.324 9.917A2.479 2.479 0 0 1 7.99 7.7l.71-.71a2.484 2.484 0 0 1 2.222-.688 4.538 4.538 0 1 0-3.6 3.615h.002ZM7.99 18.3a2.5 2.5 0 0 1-.6-2.564A2.5 2.5 0 0 1 6 13.5v-1c.005-.544.19-1.072.526-1.5H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h7.687l-.697-.7ZM19.5 12h-1.12a4.441 4.441 0 0 0-.579-1.387l.8-.795a.5.5 0 0 0 0-.707l-.707-.707a.5.5 0 0 0-.707 0l-.795.8A4.443 4.443 0 0 0 15 8.62V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.12c-.492.113-.96.309-1.387.579l-.795-.795a.5.5 0 0 0-.707 0l-.707.707a.5.5 0 0 0 0 .707l.8.8c-.272.424-.47.891-.584 1.382H8.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1.12c.113.492.309.96.579 1.387l-.795.795a.5.5 0 0 0 0 .707l.707.707a.5.5 0 0 0 .707 0l.8-.8c.424.272.892.47 1.382.584v1.12a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1.12c.492-.113.96-.309 1.387-.579l.795.8a.5.5 0 0 0 .707 0l.707-.707a.5.5 0 0 0 0-.707l-.8-.795c.273-.427.47-.898.584-1.392h1.12a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5ZM14 15.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Z" />
                            </svg><span class=" ml-2 text-sm">Setting</span>
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
            </div>
        </div>
    </div>
</nav>

{{--  End navbar --}}
