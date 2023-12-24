@extends('layouts.main')

@section('container')
 <!-- Hero Section Start -->
 <section class="bg-center bg-no-repeat bg-gray-600 bg-blend-multiply mt-24 bg-cover" style="background-image: url('/img/jumbotron2.jpg')">
    <div class="px-4 text-center py-32 lg:py-[230px] ">
        <h1 class="mb-7 text-3xl font-extrabold tracking-tight leading-none text-white md:text-4xl lg:text-5xl">Start your experience with WheelsRent</h1>
        <p class="mb-8 text-xl text-white lg:text-2xl sm:px-18 lg:px-50">Customer safety and comfort are our top priorities.</p>
    </div>
</section>
<!-- Hero Section End -->

{{-- Our Story --}}
<section class="pt-32 w-full bg-[#EEF5FF]  ">
    <div class="container">
        <div>
            <div class="flex-wrap items-center justify-center text-center">
                <h1 class="font-black text-5xl mb-5">Our story ‍so far</h1>
                
            </div>
        </div>
        <div class="gap-2 mx-auto lg:grid lg:grid-cols-2 pt-8 mb-4 bg-[#EEF5FF]">
            <div>
                <img class="h-auto max-w-full rounded-lg shadow-md shadow-gray-600" src="/img/story_rent.jpg" alt="">
            </div>
            <div class="ml-5 mt-7">
                <h1 class="text-xl uppercase font-extrabold text-primary lg:text-4xl text-center mb-2">History of WheelsRent</h1>
                <div class="mb-4 border-orange-400 border-t-4 w-52 lg:w-96 flex flex-wrap items-center justify-center  text-center mx-auto"></div>
                <p class="text-xs mt-5 mb-7 text-dark lg:text-lg mx-4">Wheelsrent was founded in 2023, We see that this business opportunity is very good and supports the tourism programme in Bandung where we started this business,
                from a loan unit to finally develop into a company that has an additional number of other businesses that support it.
                </p>
                <p class="text-xs mt-3 text-dark lg:text-lg mx-4">Our hope is to provide the best service with a hard work ethic that we instil into our team and staff in the line of 
                needs for rental units ranging from family vehicle segments, operational vehicles to luxury vehicles.
                </p>
            </div>
        </div>
    </div>
</section>
{{-- Our Story End --}}


    
@endsection