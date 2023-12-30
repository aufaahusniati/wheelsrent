@extends('dashboard.layouts.main')

@section('container')
    <div class="bg-primary bg-opacity-20 mb-3 mt-10 rounded-xl">
        <div class="flex items-center justify-between ">
            <h1 class=" py-5 px-10 text-3xl font-semibold">Data Reservation</h1>
        </div>

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
                class="text-white bg-blue-700 
                hover:bg-blue-800 font-medium rounded-lg text-sm px-2 mx-3 py-2.5 mb-4 mr-[100px] text-center 
                inline-flex items-center"
                type="button">Sort by
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Recent</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">A-Z</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Z-A</a>
                    </li>
                </ul>
            </div>
            {{-- end sort by --}}

            {{-- filter by --}}

            {{-- end filter by --}}
        </div>

        <div class="relative px-24 overflow-x-auto flex flex-wrap justify-center pb-5 ">
            <table class="w-full text-base text-center rtl:text-right text-black border-x-2 border-y-2 border-black">
                <thead class=" border-b-2 border-black text-black uppercase bg-primary bg-opacity-70 ">
                    <tr>
                        <th scope="col" class="px-6 py-3 border-black border-2">
                            id
                        </th>
                        <th scope="col" class="px-6 py-3 border-black border-2">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 border-black border-2">
                            Model
                        </th>
                        <th scope="col" class="px-6 py-3 border-black border-2">
                            Start Date
                        </th>
                        <th scope="col" class="px-6 py-3 border-black border-2">
                            End Date
                        </th>
                        <th scope="col" class="px-6 py-3 border-black border-2">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3 border-black border-2">
                            Phone Number
                        </th>
                        <th scope="col" class="px-6 py-3 border-black border-2">
                            Action
                        </th>
                    </tr>
                </thead>
                {{-- End Head Table --}}

                {{-- Isi table --}}
                <tbody>
                    @foreach ($reservations as $reservation)
                        <tr class="bg-white text-center text-sm border-b-2 border-black border">
                            <td scope="row" class="text-gray-900 whitespace-nowrap">
                                {{ $loop->iteration }}
                            </td>
                            <td class="border-black border-2">
                                {{ $reservation->name }}
                            </td>
                            <td class="border-black border-2">
                                {{-- {{ dd($reservation) }} --}}
                                {{ $reservation->cars->model }}
                            </td>
                            <td class="border-black border-2">
                                {{ $reservation->start_date }}
                            </td>
                            <td class="border-black border-2">
                                {{ $reservation->end_date }}
                            </td>
                            <td class="border-black border-2">
                                {{ $reservation->address }}
                            </td>
                            <td class="border-black border-2">
                                {{ $reservation->phone }}
                            </td>
                            {{-- icons --}}
                            <td class=" px-2 py-4 border-black border-y-2">
                                {{-- icon hapus  --}}
                                <form action="/dashboard/reservation/{{ $reservation->id }}" method="post">
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
                            </td>
                            {{-- end icon hapus  --}}
                        </tr>
                    @endforeach
                </tbody>
                {{-- End Isi Table --}}
            </table>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the search input and reservations table body
            const searchInput = document.getElementById("live-search");
            const reservationsTableBody = document.querySelector("tbody");

            // Add an event listener for input changes
            searchInput.addEventListener("input", function() {
                const searchTerm = searchInput.value.toLowerCase();

                // Loop through each row in the table body
                Array.from(reservationsTableBody.children).forEach((row) => {
                    let rowVisible = false;

                    // Loop through each cell in the row
                    Array.from(row.cells).forEach((cell) => {
                        const cellContent = cell.textContent.toLowerCase();

                        // Check if the search term is present in any cell
                        if (cellContent.includes(searchTerm)) {
                            rowVisible = true;
                        }
                    });

                    // Toggle row visibility based on the search term
                    row.style.display = rowVisible ? "table-row" : "none";
                });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const reservationsTableBody = document.querySelector("tbody");

            // Add an event listener for header clicks to handle sorting
            document.querySelectorAll("thead th").forEach((header, index) => {
                header.addEventListener("click", function() {
                    const columnIdx = index;
                    sortTable(columnIdx);
                });
            });

            // Add an event listener for dropdown menu clicks to handle sorting
            document.querySelectorAll("#dropdown ul li a").forEach((dropdownItem, index) => {
                dropdownItem.addEventListener("click", function(event) {
                    event.preventDefault();

                    const sortOption = event.target.textContent.toLowerCase();
                    const columnIdx = index;

                    // Toggle the sort direction for "Recent"
                    if (sortOption === "recent") {
                        sortTable(columnIdx, sortOption);
                    } else if (sortOption === "a-z" || sortOption === "z-a") {
                        // Toggle the sort direction for "A-Z" and "Z-A"
                        sortTable(columnIdx, sortOption);
                    }
                });
            });

            function sortTable(columnIdx, sortOption = "recent") {
                const rows = Array.from(reservationsTableBody.children);

                rows.sort((a, b) => {
                    const aValue = a.cells[columnIdx].textContent.trim();
                    const bValue = b.cells[columnIdx].textContent.trim();

                    if (sortOption === "recent") {
                        return aValue.localeCompare(bValue, undefined, {
                            numeric: true,
                            sensitivity: "base"
                        });
                    } else if (sortOption === "a-z") {
                        return aValue.localeCompare(bValue);
                    } else if (sortOption === "z-a") {
                        return bValue.localeCompare(aValue);
                    }

                    return 0; // Default to no sorting
                });

                // Remove existing rows from the table
                reservationsTableBody.innerHTML = "";

                // Append the sorted rows back to the table
                rows.forEach((row) => {
                    reservationsTableBody.appendChild(row);
                });
            }
        });
    </script>
@endsection
