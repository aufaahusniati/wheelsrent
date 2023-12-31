@extends('dashboard.layouts.main')

@section('container')

    <div class="bg-primary bg-opacity-20 mb-3 mt-10 rounded-xl">
        <div class="flex items-center justify-between">
            <h1 class="py-5 px-10 text-3xl font-semibold">Cars Make</h1>
        </div>
        <div class="flex flex-wrap justify-between pr-20 pb-4">
            <a href="/dashboard/make/create">
                <button type="submit" class="font-semibold text-white bg-green-500 border-2 border-green-700 hover:bg-green-800 rounded-lg text-sm px-2 ml-24 py-2 text-center me-2">
                    + Create New Data
                </button>
            </a> 
            {{-- search --}}
            <div class="flex flex-wrap justify-end">
                <form > 
                    <label for="default-search" class="text-gray-900 sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-3 h-3 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-60 h-9 ps-10 text-sm text-gray-900 border border-gray-500 rounded-xl bg-gray-50" placeholder="Search..." required>
                    </div>
                </form>
            {{-- end search --}}
        
            {{-- Sort by --}}
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-white hover:text-primary rounded-lg text-sm px-2 mx-3 py-2.5 text-center inline-flex items-center" type="button">Sort by 
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Racent</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">A-Z</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Z-A</a>
                        </li>
                    </ul>
                </div> 
            </div>
            {{-- end sort by --}}
        </div>
        <div class="relative px-24 overflow-x-auto flex flex-wrap justify-center pb-5 ">
            <table class="w-full text-base text-center rtl:text-right text-black border-x-2 border-y-2 border-black">
                <thead class="border-b-2 border-black text-black uppercase bg-primary bg-opacity-70 ">
                    <tr>
                        <th scope="col" class="px-6 py-3 border-black border-2">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 border-black border-2">
                            Make
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>               
                    </tr>
                </thead>
                {{-- End Head Table --}}

                {{-- Isi table --}}
                <tbody>
                    @foreach ($makes as $make)
                    <tr class="bg-white text-center text-sm border-b-2 border-black border">
                        <td scope="row" class="text-gray-900 whitespace-nowrap ">
                            {{ $loop->iteration }}
                        </td>
                        <td class="border-black border-2">
                            {{ $make->make_name }}
                        </td>
                        <td class="px-2 py-4 border-black border-y-2">
                            <div class=" inline-flex">
                                {{-- icon Edit  --}}
                                <a href="/dashboard/make/{{ $make->id }}/edit">
                                    <button>
                                        <svg class="w-6 h-6 mx-4 fill-current text-yellow-600 hover:text-yellow-700" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                            <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/>
                                        </svg>
                                    </button>
                                </a>
                                {{-- end icon Edit  --}}

                                {{-- icon Delete  --}}
                                <form method="post" action="/dashboard/make/{{ $make->id }}">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" onClick="return confirm('Are you sure?')">
                                        <svg class="w-6 h-6 ml-2 text-red-500 hover:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z" />
                                        </svg>
                                    </button>
                                </form>
                                {{-- end icon Delete  --}}
                            </div>
                        </td>
                    </tr>    
                    @endforeach
                </tbody>
                {{-- End Isi Table--}}
            </table>
        </div>
    </div>
@endsection