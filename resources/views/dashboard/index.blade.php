@extends('dashboard.layouts.main')

@section('container')
<div class="flex items-center justify-between py-10 mt-5 px-10">
    <h1 class="font-poppins text-5xl font-semibold">Welcome Back, Admin!</h1>  
</div>

<div class="w-[calc(100%-256px)] min-h-screen  bg-gray-50">
    <div class="flex justify-center pt-10 ">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-28">
            {{-- <a href="">
                <div class=" bg-white border-x-4 border-y-4 rounded-xl hover:bg-gray-100  border-primary border-opacity-50 shadow-2xl shadow-gray-800">
                    <span class="text-3xl font-poppins font-semibold pl-6 "> 2</span>
                    <div class="flex justify-between">
                        <p class=" pt-16 pl-6 font-poppins font-bold text-3xl">Admin</p>
                        <img src= "/img/icon_user.png" class=" w-28 h-28" alt="user">              
                    </div>
                </div>
            </a> --}}
            <a href="">
                <div class=" bg-white border-x-4 border-y-4 rounded-xl hover:bg-gray-100  border-primary border-opacity-50 shadow-2xl shadow-gray-800">
                    <span class="text-3xl font-poppins font-semibold pl-6 ">10</span>
                    <div class="flex justify-between">
                        <p class=" pt-16 pl-6 font-poppins font-bold text-3xl">Mobil</p>
                        <img src= "/img/icon_car.png" class=" w-28 h-28" alt="mobil">              
                    </div>
                </div>
            </a>
            <a href="">
                <div class="bg-white border-x-4 border-y-4 rounded-xl hover:bg-gray-100  border-primary border-opacity-50  shadow-2xl shadow-gray-800">
                    <span class="text-3xl font-poppins font-semibold pl-6 ">15</span>
                    <div class="flex justify-between">
                        <p class=" pt-16 pl-6 font-poppins font-bold text-3xl">Sewa</p>
                        <img src= "/img/icon_sewa.png" class=" w-28 h-28" alt="sewa">              
                    </div>
                </div>
            </a>           
        </div>
    </div>
</div>

@endsection