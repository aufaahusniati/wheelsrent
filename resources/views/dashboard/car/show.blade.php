@extends('dashboard.layouts.main')

@section('container')
<section class="pb-32">
    <div class="bg-primary bg-opacity-20 h-[500px] mx-24 mt-7 rounded-xl">
        <div class="flex items-center justify-between py-10 mt-5 px-10">
            <h1 class="text-3xl font-bold">Cars Detail</h1>
        </div>

        <div class="bg-white mx-5 my-5 rounded-xl -mt-6">
            <div class="flex flex-wrap items-start">
                <img src="{{ asset('storage/' . $car->image) }}" alt="" class="w-40 h-40 mt-14 ml-9 mb-5">
                <ul class=" ml-9 mt-5 text-lg">
                    <li class="mb-5">
                        <span class="font-bold">Make</span>
                        <span class="ml-[125px]"> : </span> 
                        <span class="ml-1">{{ $car->makes->make_name }} </span>
                    </li>
                    <li class="mb-5">
                        <span class="font-bold">Model</span>
                        <span class="ml-[119px]"> :</span>
                        <span class="ml-1">{{ $car->model }} </span>
                    </li>
                    <li lass="mb-5">
                        <span class="font-bold">Year</span>
                        <span class="ml-[134px]"> :</span>
                        <span class="ml-1">{{ $car->year }} </span>
                    </li>
                    <li class="mt-5" >
                        <span class="font-bold">Transmission</span>
                        <span class="ml-[55px]"> :</span>
                        <span class="ml-1">{{ $car->transmission }} </span>
                    </li>
                    <li class="mt-5" >
                        <span class="font-bold">Fuel</span>
                        <span class="ml-[140px]"> :</span>
                        <span class="ml-1">{{ $car->fuel }}</span>
                    </li>
                    <li class="mt-5 mb-6" >
                        <span class="font-bold">Price</span>
                        <span class="ml-[133px]"> :</span>
                        <span class="ml-1">{{ $car->price }} </span>
                    </li>
                </ul>
            </div>
            <div class=" flex flex-wrap justify-start">
                <a href="/dashboard/car/{{ $car->id }}/edit">
                    <button class="text-white bg-amber-400 font-semibold hover:bg-amber-500  ml-5   px-4 py-2 text-sm mb-5 rounded-md flex justify-between items-center">
                        <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.418 17.861 1 20l2.139-6.418m4.279 4.279 10.7-10.7a3.027 3.027 0 0 0-2.14-5.165c-.802 0-1.571.319-2.139.886l-10.7 10.7m4.279 4.279-4.279-4.279m2.139 2.14 7.844-7.844m-1.426-2.853 4.279 4.279"/>
                        </svg> Edit
                    </button>
                </a>
                <a href="/dashboard/car/">
                    <button class=" bg-blue-700 text-white font-semibold hover:bg-blue-500 hover:bg-opacity-100  mx-2 px-4 py-2 text-sm rounded-md flex justify-between items-center">
                        <svg class="w-5 h-5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 18a.969.969 0 0 0 .933 1h12.134A.97.97 0 0 0 15 18M1 7V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2v5M6 1v4a1 1 0 0 1-1 1H1m0 9v-5h1.5a1.5 1.5 0 1 1 0 3H1m12 2v-5h2m-2 3h2m-8-3v5h1.375A1.626 1.626 0 0 0 10 13.375v-1.75A1.626 1.626 0 0 0 8.375 10H7Z"/>
                        </svg>PDF Reporting
                    </button>
                </a>
                <a href="/dashboard/car">
                    <button class="text-white border font-bold bg-red-500 hover:bg-red-700  px-4 py-2 text-sm rounded-md flex justify-between items-center">
                        <svg class="w-4 h-4 mr-2 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                        </svg> Back
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>


@endsection