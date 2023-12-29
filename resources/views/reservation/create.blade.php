@extends('layouts.main')

@section('container')
<section id="reservation" class="pt-36 pb-36">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full lg:grid lg:grid-cols-2 gap-2">
                <div class="p-6 bg-primary rounded-lg shadow">
                    <h1 class="text-white font-bold text-2xl mb-3 lg:text-4xl">Reservation</h1>
                        <p class="text-white text-xs mb-4 lg:text:sm">Choose the time, destination, and type of vehicle you want to use. Enjoy a pleasant trip with Wheelsrent services</p>
                        {{-- Reservation --}}
                        <p class="text-orange-400 font-extrabold mt-6 mb-3 text-sm lg:text-lg">RESERVATION DETAIL</p>
                        @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Oops!</strong>
                            <span class="block sm:inline">Ada beberapa masalah dengan inputan Anda.</span>
                            <ul class="mt-3 list-disc list-inside text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/reservation" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-5">
                            <label for="model" class="block mb-2 text-sm font-bold text-white">MODEL</label>
                            <select id="car_id" name="car_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                @foreach ( $cars as $car)
                                        <option disabled selected hidden>Select model</option>
                                        <option value="{{ $car->id }}">{{ $car->model }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="lg:grid lg:grid-cols-2 gap-2">
                            {{-- start date --}}
                            <div class="relative mb-5 lg:max-w-sm">  
                                <div class="absolute inset-y-12 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <label for="date" class="block mb-2 text-sm font-bold text-white">START DATE</label>
                                <input datepicker type="text" id="start_date" name="start_date" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg block w-full ps-10 p-2.5" placeholder="Select Start Date">
                            </div>
                             {{-- end date --}}
                            <div class="relative mb-5 lg:max-w-sm">  
                                <div class="absolute inset-y-12 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <label for="date" class="block mb-2 text-sm font-bold text-white">END DATE</label>
                                <input datepicker type="text" id="end_date" name="end_date" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg block w-full ps-10 p-2.5" placeholder="Select End Date">
                            </div>
                        </div>

                        {{-- Customer detail --}}
                        <p class="text-orange-400 font-extrabold mt-6 mb-3 text-sm lg:text-lg">CUSTOMER DETAIL</p>
                        <div class="lg:grid lg:grid-cols-2 gap-2">
                             {{-- email --}}
                            <div class="mb-5">
                                <label for="email" class="block mb-2 text-sm font-bold text-white">EMAIL</label>
                                <input type="text" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="input Your Email">
                            </div>
                            {{-- name --}}
                            <div class="mb-5">
                                <label for="name" class="block mb-2 text-sm font-bold text-white">NAME</label>
                                <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="input Your Full Name">
                            </div>
                            {{-- address --}}
                            <div class="mb-5">
                                <label for="address" class="block mb-2 text-sm font-bold text-white">ADDRESS</label>
                                <input type="text" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="input Your Address">
                            </div>
                            {{-- phone --}}
                            <div class="mb-5 lg:max-w-sm">
                                <label for="phone" class="block mb-2 text-sm font-bold text-white">PHONE NUMBER</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                            <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                                        </svg>
                                    </div>
                                    <input type="text" id="phone" name="phone" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5"  placeholder="Input Your Phone Number" required>
                                </div>
                            </div>
                        </div>
                        {{-- button reservation --}}
                        <div class="flex flex-wrap items-center justify-center">
                            <button type="submit" class="text-white font-bold bg-orange-500 hover:bg-orange-400 rounded-full text-sm px-40 py-2.5 lg:px-44 lg:py-2.5 mt-4 text-center me-2 mb-2 shadow">Reservation</button>
                        </div>

                        {{-- button Modal reservation --}}
                        {{-- <div class="flex flex-wrap items-center justify-center">
                            <button type="submit" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block text-white font-bold bg-orange-500 hover:bg-orange-400 rounded-full text-sm px-40 py-2.5 lg:px-44 lg:py-2.5 mt-4 text-center me-2 mb-2 shadow">
                                Reservation
                            </button>
                            <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow ">
                                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="popup-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-4 md:p-5 text-center">
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 ">Reservation Successful!</h3>
                                            <button data-modal-hide="popup-modal" type="button" class="text-white bg-green-500 hover:bg-green-700 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                                Download 
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </form>
                </div>  
              
                <div class=" mt-6 lg:mt-40 lg:ml-14">
                    <h1 class="font-extrabold text-lg mb-4 lg:text-4xl">Freedom of Movement in a Busy City and Enjoy the Trip</h1>
                    <p class="font-medium text-sm mb-8">Through the Wheelsrent application you can book various transportation services as needed, with an easy and safe process. Starting from Car Rental, Tourism Rental, Transfer Services, to Tour Travel Packages.</p>
                    
                    <div class="lg:w-1/2 ">
                        <div class="inline-flex">
                            <img src="/img/center.png" alt="" class="w-[70px] h-[70px] mb-6">
                            <div class="ml-3 w-96">
                                <h1 class="font-bold">Customer Assistance Center</h1>
                                <p class="text-sm text-orange-500">211 1002</p>
                            </div>
                        </div>
                        <div class="inline-flex">
                            <img src="/img/email.png" alt="" class="w-[70px] h-[70px] mb-6">
                            <div class="ml-3 mt-2">
                                <h1 class="font-bold">Email Customer Care</h1>
                                <p class="text-sm text-orange-500">wheelsrent@co.id</p>
                            </div>
                        </div>
                        <div class="inline-flex">
                            <img src="/img/location.png" alt="" class="w-[70px] h-[70px]">
                            <div class="ml-3 mt-2">
                                <h1 class="font-bold">Location</h1>
                                <p class="text-sm text-orange-500">Jl. Orca Kore No.21, 402122</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection