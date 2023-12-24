@extends('dashboard.layouts.main')

@section('container')
    <div class="bg-primary h-auto bg-opacity-30 mx-24 mt-14 rounded-xl ">
        <div class="flex items-center justify-between py-10 mt-5 px-10">
            <h1 class="font-poppins text-5xl font-semibold">Data Car</h1>
        </div>
        <div class="flex flex-wrap justify-between">
            <a href="/dashboard/posts/create">
                <button type="submit"
                    class="font-semibold text-white bg-green-500 border-2 border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none 
                 focus:ring-blue-300 rounded-lg text-md px-5 ml-24 py-2.5 text-center me-2 mb-5 ">+
                    Create New Data
                </button>
            </a>

            <div class="flex flex-wrap justify-end pr-24 ">
                {{-- search --}}
                <form>
                    <label for="default-search" class="text-sm font-ponppins text-gray-900 sr-only ">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-72 h-11 p-4 ps-10 text-xl font-ponppins text-gray-900 border border-gray-500 rounded-xl
                        bg-gray-50 focus:ring-primary focus:border-primary"
                            placeholder="Search..." required>
                    </div>
                </form>
                {{-- end search --}}

                {{-- Sort by --}}
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="text-white bg-blue-700 
                        hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 mx-3 mb-6 text-center 
                        inline-flex items-center"
                    type="button">Sort by
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Recent</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">A-Z</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Z-A</a>
                        </li>
                    </ul>
                </div>
                {{-- end sort by --}}

                {{-- filter by --}}
                <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 mb-6 text-center inline-flex items-center"
                    type="button">
                    <svg class="w-4 h-4 text-white mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m2.133 2.6 5.856 6.9L8 14l4 3 .011-7.5 5.856-6.9a1 1 0 0 0-.804-1.6H2.937a1 1 0 0 0-.804 1.6Z" />
                    </svg>Filter by
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownDefaultCheckbox"
                    class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow ">
                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownCheckboxButton">
                        <li>
                            <div class="flex items-center">
                                <input id="checkbox-item-1" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-1"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Make</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input checked id="checkbox-item-2" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-2"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Model</label>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- end filter by --}}
            </div>
        </div>

        {{-- head table --}}
        <div class="relative px-24 overflow-x-auto pb-10">
            <table
                class="w-full text-lg text-center rtl:text-right rounded-lg text-black dark:text-white border-x-2 border-y-2 border-black">
                <thead class="text-base border-b-2 border-black text-black uppercase bg-primary bg-opacity-70 ">
                    <tr>
                        <th scope="col" class="px-6 py-3 border-black border-2">
                            id
                        </th>
                        <th scope="col" class="px-6 py-3 border-black border-2">
                            Make
                        </th>
                        <th scope="col" class="px-6 py-3 border-black border-2">
                            Model
                        </th>
                        <th scope="col" class="px-6 py-3 border-black border-2">
                            Years
                        </th>
                        <th scope="col" class="px-6 py-3 border-black border-2">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 border-black border-2">
                            Transmission
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                {{-- End Head Table --}}

                {{-- Isi table --}}
                <tbody class="bg-white">
                    @foreach ($cars as $index => $car)
                        <tr class="text-center text-sm">
                            <th scope="row" class="text-gray-900 whitespace-nowrap border-black border-2">
                                {{ $index + 1 }}
                            </th>
                            <td class="border-black border-2">
                                {{ $car->make }}
                            </td>
                            <td class="border-black border-2">
                                {{ $car->model }}
                            </td>
                            <td class="border-black border-2">
                                200.000
                            </td>
                            <td class="border-black border-2">
                                {{ $car->year }}
                            </td>
                            <td class="border-black border-2">
                                {{ $car->trany }}
                            </td>

                            {{-- icons --}}
                            <td class=" px-2 py-4 border-black border-y-2">
                                {{-- icon show --}}
                                <div class=" inline-flex">
                                    <a href="/dashboard/posts/show">
                                        <svg class="w-7 h-7 text-green-600 mr-3 hover:text-green-900 " aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                            <path
                                                d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                        </svg>
                                    </a>
                                    {{-- end icon show --}}

                                    {{-- icon hapus  --}}
                                    <a href="#">
                                        <svg class="w-6 h-6 text-red-500 hover:text-red-800" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z" />
                                        </svg>
                                    </a>
                                    {{-- end icon hapus  --}}
                                </div>
                            </td>
                            {{-- End icon  --}}
                        </tr>
                    @endforeach
                </tbody>
                {{-- End Isi Table --}}
            </table>
        </div>
    </div>
@endsection
