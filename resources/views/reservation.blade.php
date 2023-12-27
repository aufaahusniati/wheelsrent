@extends('layouts.main')

@section('container')
<section class="pt-36 pb-36">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full lg:grid lg:grid-cols-2 gap-2">
                <div class="p-6 bg-primary rounded-lg shadow">
                    <h1 class="text-white font-bold text-2xl mb-3 lg:text-4xl">Reservation</h1>
                        <p class="text-white text-xs mb-4 lg:text:sm">Choose the time, destination, and type of vehicle you want to use. Enjoy a pleasant trip with Wheelsrent services</p>
                        <p class="text-orange-400 font-bold mb-3 text-sm lg:text-lg">RESERVATION DETAIL</p>

                    <div class="lg:grid lg:grid-cols-2 gap-2">
                            <form action="">
                                    <form class="mb-5">
                                        <label for="make" class="block mb-2 text-sm font-bold text-white">MAKE</label>
                                        <select id="make_id" name="make_id" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                            {{-- @foreach ( $makes as $make)
                                                <option disabled selected hidden>Select Make</option>
                                                <option value="{{ $make->id }}">{{ $make->make_name }}</option>
                                            @endforeach --}}
                                        </select>
                                    </form>
                                    <form class="mb-5">
                                        <label for="model" class="block mb-2 text-sm font-bold text-white">MODEL</label>
                                        <select id="model_id" name="model_id" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                            {{-- @foreach ( $cars as $car)
                                                <option disabled selected hidden>Select Model</option>
                                                <option value="{{ $car->id }}">{{ $car->model }}</option>
                                            @endforeach --}}
                                        </select>
                                    </form>
                                    <div class="relative mb-5 lg:max-w-sm">  
                                        <div class="absolute inset-y-12 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                        </div>
                                        <label for="date" class="block mb-2 text-sm font-bold text-white">START DATE</label>
                                        <input datepicker type="text" id="startdate" name="startdate" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Select date">
                                    </div>
                                    <div class="relative mb-5 lg:max-w-sm">  
                                        <div class="absolute inset-y-12 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                        </div>
                                        <label for="date" class="block mb-2 text-sm font-bold text-white">END DATE</label>
                                        <input datepicker type="text" id="startdate" name="startdate" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Select date">
                                    </div>
                                </div>
                                <p class="text-orange-400 font-extrabold mt-6 mb-3 text-sm lg:text-lg">CUSTOMER DETAIL</p>
                                <div class="lg:grid lg:grid-cols-2 gap-2">
                                    <div class="mb-5">
                                        <label for="email" class="block mb-2 text-sm font-bold text-white">EMAIL</label>
                                        <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="input Your Email">
                                    </div>
                                    <div class="mb-5">
                                        <label for="name" class="block mb-2 text-sm font-bold text-white">NAME</label>
                                        <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="input Your Full Name">
                                    </div>
                                    <div class="mb-5">
                                        <label for="address" class="block mb-2 text-sm font-bold text-white">ADDRESS</label>
                                        <input type="text" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="input Your Address">
                                    </div>
                                    <form class="mb-5 lg:max-w-sm ">
                                        <label for="phone-input" class="block mb-2 text-sm font-bold text-white">PHONE NUMBER</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                                    <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                                                </svg>
                                            </div>
                                            <input type="text" id="phone-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="085-152-11002" required>
                                        </div>
                                    </form>
                                </div>
                                <div class="flex flex-wrap items-center justify-center">
                                    <button type="button" class="text-white font-bold bg-orange-500 hover:bg-orange-400 focus:outline-none focus:ring-4 focus:ring-blue-300 rounded-full text-sm px-40 py-2.5 lg:px-44 lg:py-2.5 mt-4 text-center me-2 mb-2 shadow">Reservation</button>
                                </div>
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