@extends('dashboard.layouts.main')

@section('container')
    <div class="bg-primary bg-opacity-20 mx-24 mt-14 rounded-xl">
        <div class="flex items-center justify-between py-10 mt-5 px-10">
            <h1 class=" text-xl font-semibold">Welcome Back, Admin!</h1>  
        </div>
    </div>

    <div class="bg-primary bg-opacity-20 mx-24 mt-5 rounded-xl">
        <div class="flex flex-wrap items-center justify-center pt-5 ">
            <div class="grid grid-cols-3 gap-5 px-5">
                <a href="/dashboard/make">
                    <div class="bg-[#4CB9E7] rounded-lg hover:bg-[#3081D0] border-primary border-opacity-50 shadow shadow-gray-900">
                        <span class="text-3xl  font-semibold pl-6 "> 2</span>
                        <div class="flex justify-between">
                            <p class="pt-16 pl-6 font-bold text-xl">Make</p>
                            <img src="/img/icon_customer.png" class=" w-28 h-28" alt="user">              
                        </div>
                    </div>
                </a>

                <a href="/dashboard/cars">
                    <div class=" bg-[#A6CF98] border-3 rounded-lg  hover:bg-[#557C55] border-green-500 border-opacity-50 shadow shadow-gray-900">
                        <span class="text-3xl pt-10 font-semibold pl-6 ">10</span>
                        <div class="flex justify-between">
                            <p class="pt-16 pl-6 font-bold text-xl">Cars</p>
                            <img src= "/img/icon_car.png" class=" w-28 h-28 " alt="Cars">              
                        </div>
                    </div>
                </a>
                <a href="/dashboard/sewa">
                    <div class="bg-[#FEFFAC] mb-8 rounded-lg hover:bg-[#F4E869]  border-yellow-500 border-opacity-50 shadow shadow-gray-900">
                        <span class="text-3xl  font-semibold pl-6 ">15</span>
                        <div class="flex justify-between">
                            <p class=" pt-16 pl-6  font-bold text-xl">Rent</p>
                            <img src= "/img/icon_sewa.png" class=" w-28 h-28 " alt="sewa">              
                        </div>
                    </div>
                </a>         
            </div>
        </div>
    </div>


@endsection