@extends('dashboard.layouts.main')

@section('container')
<div class="bg-primary  bg-opacity-30 h-[500px] mx-24 mt-14 rounded-xl">
    <div class="flex items-center justify-between py-10 mt-7 px-10">
        <h1 class="font-poppins text-5xl font-semibold"> Car Detail</h1>
    </div>

    <div class="bg-white mx-5 my-5 rounded-xl -mt-3">
        <div class="flex flex-wrap items-start">
            <img src="/img/nissan.jpg" alt="" class="w-60 h-60 mt-5 ml-5  mb-5">
            <ul class=" ml-9 mt-5 text-2xl ">
                <li class=" mb-5">
                    Model <span class="ml-28"> :</span> 
                    <span class="ml-1">Leaf</span>
                </li>
                <li class=" mb-5">
                    Make <span class="ml-[119px]"> :</span>
                    <span class="ml-1">Nissan</span>
                </li>
                <li lass="mb-5">
                    Year <span class="ml-[127px]"> :</span>
                    <span class="ml-1">2020</span>
                </li>
                <li class="mt-5" >
                    Fuel <span class="ml-[131px]"> :</span>
                    <span class="ml-1">Electric</span>
                </li>
                <li class="mt-5" >
                    Price <span class="ml-[119px]"> :</span>
                    <span class="ml-1">IDR.350.000,00</span>
                </li>
            </ul>
        </div>
        <div class=" flex flex-wrap justify-start ">
            <a href="/dashboard/posts/edit">
                <button class=" bg-amber-400 font-semibold border border-amber-600 hover:bg-amber-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-700 ml-5 px-5 text-lg mb-5 rounded-md flex justify-between items-center">
                    <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.418 17.861 1 20l2.139-6.418m4.279 4.279 10.7-10.7a3.027 3.027 0 0 0-2.14-5.165c-.802 0-1.571.319-2.139.886l-10.7 10.7m4.279 4.279-4.279-4.279m2.139 2.14 7.844-7.844m-1.426-2.853 4.279 4.279"/>
                    </svg> Edit
                </button>
            </a>
            <a href="/dashboard/posts/edit">
                <button class="bg-primary font-semibold border-primary hover:bg-blue-600 hover:bg-opacity-100 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-700 mx-2 px-3 text-lg rounded-md flex justify-between items-center">
                    <svg class="w-5 h-5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 18a.969.969 0 0 0 .933 1h12.134A.97.97 0 0 0 15 18M1 7V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2v5M6 1v4a1 1 0 0 1-1 1H1m0 9v-5h1.5a1.5 1.5 0 1 1 0 3H1m12 2v-5h2m-2 3h2m-8-3v5h1.375A1.626 1.626 0 0 0 10 13.375v-1.75A1.626 1.626 0 0 0 8.375 10H7Z"/>
                      </svg>PDF Reporting
                </button>
            </a>
            <a href="/dashboard/posts">
                <button class="hover:text-white border font-semibold border-red-600 bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-400 
                 px-5 text-lg rounded-md flex justify-between items-center">
                    <svg class="w-4 h-4 mr-2 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                    </svg> Back
                </button>
            </a>
        </div>
    </div>
</div>


@endsection