@extends('layouts.main')

@section('container')
    <!-- Hero Section Start -->
        <section class="bg-center bg-no-repeat bg-gray-500 bg-blend-multiply mt-24 bg-cover" style="background-image: url('/img/jumbotron3.jpg')">
            <div class="px-4 text-center py-32 lg:py-[232px] ">
                <h1 class="mb-4  text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Car Rental Services</h1>
                <p class="mb-8 text-lg text-white lg:text-xl sm:px-16 lg:px-48">The ultimate travel experience with car rental transport solutions and professional driver services.</p>
            </div>
        </section>

        <section id="type" class="pt-24">
            <div class="container">
                <div class="flex-wrap items-center justify-center text-center">
                    <h1 class="font-black text-5xl mb-2">Explore the Cars</h1>
                    <p class="text-lg mb-4">WheelsRent have various car classes. Select your perfect fit on.</p>
                </div>
            <div class="flex pl-10 md:pl-[180px] pt-3 lg:justify-end lg:pr-5">
                <div class="flex flex-wrap justify-center" >
                    {{-- search --}}
                    <form> 
                        <label for="default-search" class="text-sm text-gray-900 sr-only">Search</label>
                        <div class="relative">
                           <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                              <svg class="w-5 h-5 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                              </svg>
                           </div>
                           <input type="search" id="default-search" class="block w-[140px] lg:w-72 h-11 p-4 ps-10 text-md lg:text-lg font-ponppins text-gray-900 border border-gray-500 rounded-xl
                            bg-gray-50 focus:ring-primary focus:border-primary" placeholder="Search..." required>
                        </div>
                     </form>
                    </div>
                     {{-- end search --}}
                
                     {{-- Sort by --}}
                     
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 
                            hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 mx-3 text-center 
                           flex items-center" type="button">Sort by 
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
                {{-- Cards --}}
                {{-- @foreach ($cars as $car) --}}
                <div class="gap-3 lg:grid lg:grid-cols-3">
                    <!-- Cards 1-->
                    {{-- @if($car->image) --}}
                    <div class="max-w-sm mx-auto my-6 bg-white border border-gray-200 rounded-lg shadow-xl">
                        {{-- Image --}}
                        <img class="rounded-t-lg" src="{{-- {{ asset('storage/' . $car->image) }} --}}"/>
                    {{-- @endif --}}
                        <div class="p-5">
                            <!-- Model Car -->
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{-- {{ $car->model }} --}}</h5>
                            <div class="gap-4 lg:grid lg:grid-cols-2">
                                <!-- Make Car-->
                                <div class="flex items-center">
                                    <div class="flex items-center justify-center border border-primary rounded-lg h-[30px] w-[32px]">
                                        <svg class="w-[25px] h-[25px]" fill="#0174BE" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                            <path d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/>
                                        </svg> 
                                    </div>
                                    <div class="m-2 text-[12px]">
                                        <p>MAKE</p>
                                        <p class="font-semibold"> {{-- {{ $car->make->make_name }} --}}</p>
                                    </div>
                                </div>
                                <!-- Transmission -->
                                <div class="flex items-center">
                                    <div class="flex items-center justify-center border border-primary rounded-lg h-[30px] w-[32px]">
                                        <img src="/img/transmission.png" class="w-[25px] h-[25px]" alt="">
                                    </div>
                                    <div class="m-2 text-[12px]">
                                        <p>TRANSMISSION</p>
                                        <p class="font-semibold">{{-- {{ $car->transmission }} --}}</p>
                                    </div>
                                </div>
                                <!-- Fuel -->
                                <div class="flex items-center">
                                    <div class="flex items-center justify-center border border-primary rounded-lg h-[30px] w-[32px]">
                                        <svg class="w-[25px] h-[25px]" fill="#0174BE" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                            <path d="M32 64C32 28.7 60.7 0 96 0H256c35.3 0 64 28.7 64 64V256h8c48.6 0 88 39.4 88 88v32c0 13.3 10.7 24 24 24s24-10.7 24-24V222c-27.6-7.1-48-32.2-48-62V96L384 64c-8.8-8.8-8.8-23.2 0-32s23.2-8.8 32 0l77.3 77.3c12 12 18.7 28.3 18.7 45.3V168v24 32V376c0 39.8-32.2 72-72 72s-72-32.2-72-72V344c0-22.1-17.9-40-40-40h-8V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64zM96 80v96c0 8.8 7.2 16 16 16H240c8.8 0 16-7.2 16-16V80c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16z"/>
                                        </svg>
                                    </div>
                                    <div class="m-2 text-[12px]">
                                        <p>FUEL</p>
                                        <p class="font-semibold">{{-- {{ $car->fuel }} --}}</p>
                                    </div>
                                </div>
                                <!-- Price -->
                                <div class="flex items-center">
                                    <div class="flex items-center justify-center border border-primary rounded-lg h-[30px] w-[32px]">
                                        <svg class="w-[25px] h-[25px]" fill="#0174BE" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                            <path d="M0 112.5V422.3c0 18 10.1 35 27 41.3c87 32.5 174 10.3 261-11.9c79.8-20.3 159.6-40.7 239.3-18.9c23 6.3 48.7-9.5 48.7-33.4V89.7c0-18-10.1-35-27-41.3C462 15.9 375 38.1 288 60.3C208.2 80.6 128.4 100.9 48.7 79.1C25.6 72.8 0 88.6 0 112.5zM288 352c-44.2 0-80-43-80-96s35.8-96 80-96s80 43 80 96s-35.8 96-80 96zM64 352c35.3 0 64 28.7 64 64H64V352zm64-208c0 35.3-28.7 64-64 64V144h64zM512 304v64H448c0-35.3 28.7-64 64-64zM448 96h64v64c-35.3 0-64-28.7-64-64z"/>
                                        </svg>
                                    </div>
                                    <div class="m-2 text-[12px]">
                                        <p>PRICE</p>
                                        <p class="font-semibold">Rp. {{-- {{ $car->price }} --}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Button Reservasi -->
                            <div class="flex justify-center items-center mt-4 mr-[40px]">
                                <a href="/reservation" class="inline-flex items-center px-2 py-1 text-sm font-medium  text-white bg-primary rounded-full border-2 border-primary hover:bg-white hover:text-primary focus:z-10">
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                                        <path fill="white" d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
                                    </svg>
                                    <p class="px-2">Reservation</p>
                                </a>
                            </div> 
                        </div>
                    </div>  
                </div>
                {{-- @endforeach --}}
            </div>
        </section> 

    <!-- Hero Section End -->
@endsection