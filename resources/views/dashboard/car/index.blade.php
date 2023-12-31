@extends('dashboard.layouts.main')

@section('container')

    <div class="bg-primary bg-opacity-20 mb-3 mt-10 rounded-xl">
        <div class="flex items-center justify-between ">
            <h1 class="py-5 px-10 text-3xl font-semibold">Data Cars</h1>
        </div>
        <div class="flex flex-wrap justify-between">
            <a href="/dashboard/car/create">
                <button type="submit"
                    class="font-semibold text-white bg-green-500 border-2 hover:bg-green-800 rounded-lg text-sm px-2 ml-24 py-2 text-center me-2 mb-5 ">
                    + Create New Data
                </button>
            </a>

            <div class="flex flex-wrap justify-end">
                {{-- search --}}
                <form>
                    <label for="default-search" class="text-gray-900 sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-3 h-3 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="live-search"
                            class="block w-60 h-9 ps-10 text-sm text-gray-900 border border-gray-500 rounded-xl bg-gray-50"
                            placeholder="Search..." required>
                    </div>
                </form>
                {{-- end search --}}

                {{-- Sort by --}}
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-2 mx-3 mb-6 mr-[100px] text-center inline-flex items-center"
                    type="button">
                    Sort by
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                    <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="{{ route('cars.index', ['sort' => 'recent']) }}"
                                class="block px-4 py-2 @if ($currentSort == 'recent') bg-gray-100 @endif">Recent</a>
                        </li>
                        <li>
                            <a href="{{ route('cars.index', ['sort' => 'asc']) }}"
                                class="block px-4 py-2 @if ($currentSort == 'asc') bg-gray-100 @endif">A-Z</a>
                        </li>
                        <li>
                            <a href="{{ route('cars.index', ['sort' => 'desc']) }}"
                                class="block px-4 py-2 @if ($currentSort == 'desc') bg-gray-100 @endif">Z-A</a>
                        </li>
                    </ul>
                </div>
                {{-- end sort by --}}
            </div>
        </div>

        {{-- head table --}}
        <div class="relative px-24 overflow-x-auto pb-10">
            <table
                class="w-full text-lg text-center rtl:text-right rounded-lg text-black border-x-2 border-y-2 border-black">
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
                            Transmission
                        </th>
                        <th scope="col" class="px-6 py-3 border-black border-2">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                {{-- End Head Table --}}

                {{-- Isi table --}}
                <tbody class="bg-white">

                    @foreach ($cars as $car)
                        <tr class="bg-white text-center text-sm border-b-2 border-black border car-row">
                            <td scope="row" class="text-gray-900 whitespace-nowrap">
                                {{ $loop->iteration }}
                            </td>
                            <td class="border-black border-2 make">
                                {{ $car->makes->make_name }}
                            </td>
                            <td class="border-black border-2 model">
                                {{ $car->model }}
                            </td>
                            <td class="border-black border-2 year">
                                {{ $car->year }}
                            </td>
                            <td class="border-black border-2 transmission">
                                {{ $car->transmission }}
                            </td>
                            <td class="border-black border-2 price">
                                {{ $car->price }}
                            </td>

                            {{-- icons --}}
                            <td class=" px-2 py-4 border-black border-y-2">
                                {{-- icon show --}}
                                <div class=" inline-flex">
                                    <a href="/dashboard/car/{{ $car->id }}">
                                        <svg class="w-7 h-7 text-green-600 mr-3 hover:text-green-900 " aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                            <path
                                                d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                        </svg>
                                    </a>
                                    {{-- end icon show --}}

                                    {{-- icon hapus  --}}
                                    <form action="/dashboard/car/{{ $car->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button onclick="return confirm('Are you sure?')" type="submit">
                                            <svg class="w-6 h-6 text-red-500 hover:text-red-800" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z" />
                                            </svg>
                                        </button>
                                    </form>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const liveSearchInput = document.getElementById('live-search');
            const rows = document.querySelectorAll('.car-row');

            liveSearchInput.addEventListener('input', function() {
                const searchTerm = liveSearchInput.value.toLowerCase();

                rows.forEach(function(row) {
                    const make = row.querySelector('.make').textContent.toLowerCase();
                    const model = row.querySelector('.model').textContent.toLowerCase();
                    const year = row.querySelector('.year').textContent.toLowerCase();
                    const transmission = row.querySelector('.transmission').textContent
                        .toLowerCase();
                    const price = row.querySelector('.price').textContent.toLowerCase();

                    if (make.includes(searchTerm) || model.includes(searchTerm) || year.includes(
                            searchTerm) || transmission.includes(searchTerm) || price.includes(
                            searchTerm)) {
                        row.style.display = 'table-row';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        });
    </script>
@endsection
