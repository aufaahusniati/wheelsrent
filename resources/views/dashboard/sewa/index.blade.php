@extends('dashboard.layouts.main')

@section('container')
<div class="bg-primary bg-opacity-30 mx-24 mb-3 mt-10 rounded-xl">
    <div class="flex items-center justify-between ">
        <h1 class=" py-5 px-10 text-5xl font-semibold">Data Rent</h1>
        
</div>
    
    <div class="flex flex-wrap justify-end pr-24 pb-4">
        {{-- search --}}
        <form> 
            <label for="default-search" class="text-sm font-ponppins text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
               <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                  </svg>
               </div>
               <input type="search" id="default-search" class="block w-72 h-11 p-4 ps-10 text-xl font-ponppins text-gray-900 border border-gray-500 rounded-xl
                bg-gray-50 focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required>
            </div>
         </form>
         {{-- end search --}}
    
         {{-- Sort by --}}
         
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 
                hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 mx-3 py-2.5 text-center 
                inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Sort by 
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
            </button>
        <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Racent</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">A-Z</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Z-A</a>
                </li>
                </ul>
            </div> 
         {{-- end sort by --}}
    
         {{-- filter by --}}
         
            <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox" 
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-2.5 text-center inline-flex items-center" 
                    type="button">
                    <svg class="w-4 h-4 text-white mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m2.133 2.6 5.856 6.9L8 14l4 3 .011-7.5 5.856-6.9a1 1 0 0 0-.804-1.6H2.937a1 1 0 0 0-.804 1.6Z"/>
                    </svg>Filter by 
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
            </button>
                
        <!-- Dropdown menu -->
            <div id="dropdownDefaultCheckbox" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow ">
                <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                <li>
                    <div class="flex items-center">
                    <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Make</label>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <input checked id="checkbox-item-2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="checkbox-item-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Model</label>
                    </div>
                </li>
                </ul>
            </div>
        
         {{-- end filter by --}}
    </div>

<div class="relative px-24 overflow-x-auto flex flex-wrap justify-center pb-5 ">
    
    <table class="w-full text-lg text-center rtl:text-right text-black border-x-2 border-y-2 border-black">
        <thead class=" border-b-2 border-black text-black uppercase bg-primary bg-opacity-70 ">
            <tr>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    id
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Name Customer
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
                <th scope="col" class="px-6 py-3 text-center">
                    Status
                </th>               
            </tr>
        </thead>
        {{-- End Head Table --}}

        {{-- Isi table --}}
        <tbody>
            <tr class="odd:bg-white  text-center text-sm odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </th>
                <td class="border-black border-2">
                    David Pamungkas
                </td>
                <td class="border-black border-2">
                    Honda Cr-v
                </td>
                <td class="border-black border-2">
                    12-12-2023
                </td>
                <td class="border-black border-2">
                    24-12-2023
                </td>
                <td class="border-black border-2 text-green-500">
                    Active
                </td>
                
            </tr>           
        </tbody>
        {{-- End Isi Table--}}
    </table>
</div>
</div>
@endsection