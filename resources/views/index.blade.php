@extends('layouts.main')

@section('container')
<!-- Hero Section Start -->
<section id="home" class="pt-36">
    <div class="container">
        <div id="controls-carousel" class="relative w-full z-0" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-52 overflow-hidden rounded-lg md:h-96">
                <!-- Slide 1 -->
                <div class="flex flex-wrap duration-700 ease-in-out bg-white bg" data-carousel-item="active">
                    <img src="/img/slide1.jpg" class="absolute block bg-opacity-10 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="...">
                    <div class="absolute w-full self-center ml-[65px] lg:w-1/2">
                        <h1 class="text-xs font-bold text-white lg:text-4xl">Get your best experience with WheelsRent</h1>
                        <p class="text-xs mt-3 mb-5 mr-20 text-slate-300 leading-relaxed lg:text-lg">Providing the best transportation and solutions to meet your everyday mobility needs</p>

                        <a href="/reservation/create" class="text-xs font-semibold text-white bg-primary py-[8px] px-[15px] rounded-full hover:bg-white hover:text-primary transition duration-300 ease-in-out lg:text-base lg:py-2 lg:px-8 ">Reservation</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="flex flex-wrap duration-700 ease-in-out bg-white" data-carousel-item>
                    <img src="/img/slide2.jpg" class="absolute block w-full bg-opacity-10 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute w-full self-center ml-[65px] lg:w-1/2">
                        <h1 class="text-xs font-bold text-white lg:text-4xl">Car Rental Services in Bandung</h1>
                        <p class="text-xs mt-2 mb-3 mr-[80px] text-slate-300 leading-relaxed lg:text-lg">WheelsRent is a company engaged in rental services tailored to customer needs.</p>

                        <a href="/type" class="text-xs font-semibold text-white bg-primary py-[5px] px-[15px] rounded-full hover:bg-white hover:text-primary transition duration-300 ease-in-out lg:text-base lg:py-2 lg:px-8">Prices</a>
                    </div>
                </div>
            </div>

            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Cards Section Start -->
<section id="card" class="pt-32 pb-20">
    <div class="container">

        <p class="text-center text-slate-400 text-xs lg:text-sm">HOW IT WORKS</p>
        <h1 class="text-center font-black lg:text-4xl  mb-2 sm:text-xl "> Wheelsrent Has Never Been That Easy</h1>
        <div class="mb-4 border-orange-400 border-t-4 w-10 flex flex-wrap items-center justify-center  text-center mx-auto"></div>
        <p class="text-center lg:text-sm text-[10px] lg:mb-4">Book a car when you need to drive, save greatly, and enjoy freedom of movement.</p>

        <div class="gap-3 lg:grid lg:grid-cols-3">
            <!-- Cards 1 -->
            <div class="w-full mx-auto my-5 block max-w-sm p-6 bg-white ">
                <div class="flex items-center justify-center">
                    <img src="/img/laptop.png" alt="" class="w-20 h-20 ">
                </div>
                <h5 class="mb-2 mt-2 text-base text-center font-bold tracking-tight text-blank lg:text-xl">Open Our Website</h5>
                <div class="mb-4 border-slate-300 border-t-4 w-10 flex flex-wrap items-center justify-center  text-center mx-auto"></div>
                <p class="text-xs text-gray-700 lg:text-sm text-center">Open our website and create a profile.</p>
            </div>

            <!-- Cards 2 -->
            <div class="w-full mx-auto my-5 block max-w-sm p-6 bg-white ">
                <div class="flex items-center justify-center">
                    <img src="/img/car.png" alt="" class="w-20 h-20 ">
                </div>
                <h5 class="mb-2 mt-2 text-base text-center font-bold tracking-tight text-blank lg:text-xl">Book a Card</h5>
                <div class="mb-4 border-slate-300 border-t-4 w-10 flex flex-wrap items-center justify-center  text-center mx-auto"></div>
                <p class="text-xs text-gray-700 lg:text-sm text-center">Open section type car to see all the cars and select one.</p>
            </div>

            <!-- Cards 3 -->
            <div class="w-full mx-auto my-5 block max-w-sm p-6 bg-white ">
                <div class="flex items-center justify-center">
                    <img src="/img/stir.png" alt="" class="w-20 h-20 ">
                </div>
                <h5 class="mb-2 mt-2 text-base text-center font-bold tracking-tight  text-blank lg:text-xl">Enjoy Your Ride</h5>
                <div class="mb-4 border-slate-300 border-t-4 w-10 flex flex-wrap items-center justify-center  text-center mx-auto"></div>
                <p class="text-xs text-gray-700 lg:text-sm text-center">When you are next to the car, unlock it with your smartphone.</p>
            </div>
        </div>
    </div>
</section>
<!-- Cards Section End -->

<!-- Tentang Kami Section Start -->
<section id="about" class="pt-30  ">
    <div class="container">
        <svg class="-mx-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#EEF5FF" fill-opacity="1" d="M0,224L26.7,213.3C53.3,203,107,181,160,176C213.3,171,267,181,320,186.7C373.3,192,427,192,480,165.3C533.3,139,587,85,640,101.3C693.3,117,747,203,800,245.3C853.3,288,907,288,960,240C1013.3,192,1067,96,1120,96C1173.3,96,1227,192,1280,234.7C1333.3,277,1387,267,1413,261.3L1440,256L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
        </svg>
        <div class="px-5 -mx-4 gap-2 lg:grid lg:grid-cols-2 bg-[#EEF5FF]">
            <img class="h-auto max-w-full rounded-lg" src="/img/tentangkami.png" alt="">
            <div>
                <p class="text-center text-slate-400">about</p>
                <div class="mb-4 border-orange-400 border-t-4 w-10 flex flex-wrap items-center justify-center  text-center mx-auto"></div>
                <h1 class="text-xl uppercase font-extrabold text-primary lg:text-4xl text-center mb-2">WheelsRent</h1>
                <p class="text-xs mt-3 mb-4 text-dark lg:text-lg mx-4">WheelsRent is a car rental company that offers a variety of vehicle options for your travel needs.
                    With WheelsRent, you can choose from a range of modern and high-quality car models to suit your journey.
                    WheelsRent's friendly and professional customer service is ready to assist you in the booking and rental process.
                    With an extensive network of locations, WheelsRent is present to make car rental convenient at various strategic spots.
                    Customer safety and comfort are WheelsRent's top priorities, ensuring well-maintained and safe vehicles for every trip.</p>

                <a href="/about" class="ml-4 text-xs font-semibold py-[4px] px-[10px] text-white bg-primary rounded-full border-2 border-primary hover:bg-white hover:text-primary focus:z-10 focus:ring-2 focus:ring-primary focus:text-primary lg:text-base lg:py-2 lg:px-8">Read more</a>
            </div>

        </div>
        <div>
            <svg class="-mx-4 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#EEF5FF" fill-opacity="1" d="M0,128L26.7,138.7C53.3,149,107,171,160,160C213.3,149,267,107,320,101.3C373.3,96,427,128,480,170.7C533.3,213,587,267,640,288C693.3,309,747,299,800,288C853.3,277,907,267,960,272C1013.3,277,1067,299,1120,277.3C1173.3,256,1227,192,1280,149.3C1333.3,107,1387,85,1413,74.7L1440,64L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
            </svg>
        </div>
    </div>
</section>
<!-- Tentang Kami Section End -->

{{-- Top Cars Start --}}
<section id="top" class="pt-36">
    <div class="flex-wrap items-center justify-center text-center">
        <p class="text-gray-400 text-sm mb-2">AVAILABLE CARS</p>
        <div class="mb-4 border-orange-400 border-t-4 w-20 flex flex-wrap items-center justify-center  text-center mx-auto"></div>
        <h1 class="font-black text-4xl mb-2">Explore the Top Cars</h1>
        <p class="text-base mb-4">WheelsRent have various car classes. Select your perfect fit on.</p>
    </div>
    <div class="flex">
        <div class="w-2/12 flex items-center">
            <div class="w-full text-right">
                <button onclick="next()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="sliderContainer" class="w-full overflow-hidden">
            <ul id="slider" class="flex w-full duration-700">
                <li class="p-5">
                    {{-- @foreach ($cars as $car) --}}
                    <div class="border rounded-lg p-5 h-full">
                          {{-- @if($car->image) --}}
                        <img class="h-50 w-full object-cover rounded-md" src="{{-- {{ asset('storage/' . $car->image) }} --}}" alt="">
                        {{-- @endif --}}
                        <!-- Model Car -->
                        <h5 class="mb-2 mt-2 text-2xl font-bold tracking-tight text-gray-900">{{-- {{ $car->model }} --}}/h5>
                        <div class="gap-4 lg:grid lg:grid-cols-2">
                            <!-- Make Car-->
                            <div class="flex items-center">
                                <div class="flex items-center justify-center border border-primary rounded-lg h-[30px] w-[32px]">
                                    <svg class="w-[25px] h-[25px]" fill="#0174BE" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                        <path d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                                    </svg>
                                </div>
                                <div class="m-2 text-[12px]">
                                    <p>MAKE</p>
                                    <p class="font-semibold">{{-- {{ $car->make->make_name }} --}}</p>
                                </div>
                            </div>
                            <!-- Transmission -->
                            <div class="flex items-center">
                                <div class="flex items-center justify-center border border-primary rounded-lg h-[30px] w-[32px]">
                                    <svg class="w-[25px] h-[25px]" fill="#0174BE" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                        <path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                                    </svg>
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
                                        <path d="M32 64C32 28.7 60.7 0 96 0H256c35.3 0 64 28.7 64 64V256h8c48.6 0 88 39.4 88 88v32c0 13.3 10.7 24 24 24s24-10.7 24-24V222c-27.6-7.1-48-32.2-48-62V96L384 64c-8.8-8.8-8.8-23.2 0-32s23.2-8.8 32 0l77.3 77.3c12 12 18.7 28.3 18.7 45.3V168v24 32V376c0 39.8-32.2 72-72 72s-72-32.2-72-72V344c0-22.1-17.9-40-40-40h-8V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64zM96 80v96c0 8.8 7.2 16 16 16H240c8.8 0 16-7.2 16-16V80c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16z" />
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
                                        <path d="M0 112.5V422.3c0 18 10.1 35 27 41.3c87 32.5 174 10.3 261-11.9c79.8-20.3 159.6-40.7 239.3-18.9c23 6.3 48.7-9.5 48.7-33.4V89.7c0-18-10.1-35-27-41.3C462 15.9 375 38.1 288 60.3C208.2 80.6 128.4 100.9 48.7 79.1C25.6 72.8 0 88.6 0 112.5zM288 352c-44.2 0-80-43-80-96s35.8-96 80-96s80 43 80 96s-35.8 96-80 96zM64 352c35.3 0 64 28.7 64 64H64V352zm64-208c0 35.3-28.7 64-64 64V144h64zM512 304v64H448c0-35.3 28.7-64 64-64zM448 96h64v64c-35.3 0-64-28.7-64-64z" />
                                    </svg>
                                </div>
                                <div class="m-2 text-[12px]">
                                    <p>PRICE</p>
                                    <p class="font-semibold">Rp. {{-- {{ $car->price }} --}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Button Reservasi -->
                        <div class="mt-4 flex items-center justify-center">
                            <a href="/reservation" class="inline-flex items-center px-2 py-1 text-sm font-medium  text-white bg-primary rounded-full border-2 border-primary hover:bg-white hover:text-primary focus:z-10 focus:ring-2 focus:ring-primary focus:text-primary">
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2 " xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                                    <path fill="white" d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                                </svg>
                                <p class="px-2">Reservation</p>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="w-2/12 flex items-center">
            <div class="w-full">
                <button onclick="prev()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg ml-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
{{-- Top Cars End --}}

<!-- testimoni -->
<section id="testimoni" class="py-12 bg-slate-200">
    <div class="flex flex-wrap justify-center mx-10 text-center text-sm mt-6 bg-slate-100 shadow-md shadow-gray-400 rounded-md">
        <div class="container mx-auto py-8 px-4">
            <div>
                <p class="text-xs mb-2">TESTIMONIALS</p>
                <div class="mb-4 border-orange-400 border-t-4 w-20 flex flex-wrap items-center justify-center text-center mx-auto"></div>
                <h1 class="mb-4 text-2xl font-bold text-dark lg:text-3xl">Clients' Feedback
                </h1>
                <p class="mb-8 text-lg text-gray-500 lg:text-lg">You can leave a review about our service right in the wheelsrent </p>
            </div>
            <div class="md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- testimoni 1 -->
                <div style="margin-bottom: 3rem;">
                    <div class="flex items-center mb-2 text-yellow-300">
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-left text-sm font-semibold text-gray-900 lg:text-lg">
                        "I am very satisfied with quality fleet and services provided by this car rental. Comfortable car and excellent condition make our trip was much more enjoyable."</p>
                    <figcaption class="flex items-center mt-2 space-x-3 rtl:space-x-reverse">
                        <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-300 ">
                            <cite class="pe-3 font-medium text-gray-900">Wildan</cite>
                            <cite class="ps-3 text-sm text-gray-500">Customer</cite>
                        </div>
                    </figcaption>
                </div>

                <!-- testimoni 2 -->
                <div style="margin-bottom: 3rem;">
                    <figure class="max-w-screen-md">
                        <div class="flex items-center mb-2 text-yellow-300">
                            <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                        </div>
                        <p class="text-left text-sm font-semibold text-gray-900 lg:text-lg">
                            "Services from car rental this is outside normal! Clean and well-maintained cars, and friendly and responsive staff. Experience rent a car it's really fun here."
                        </p>
                        <figcaption class="flex items-center mt-2 space-x-3 rtl:space-x-reverse">
                            <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-300">
                                <cite class="pe-3 font-medium text-gray-900">Indrih Widyah</cite>
                                <cite class="ps-3 text-sm text-gray-500">Customer</cite>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <!-- testimoni 3 -->
                <div style="margin-bottom: 3rem;">
                    <div class="flex items-center mb-2 text-yellow-300">
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-left text-sm font-semibold text-gray-900 lg:text-lg">
                        "Experienced renting a car here very satisfactory. Clean and well-maintained cars at competitive prices. Very recommended for those who need quality car rental."</p>
                    <figcaption class="flex items-center mt-2 space-x-3 rtl:space-x-reverse">
                        <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-300">
                            <cite class="pe-3 font-medium text-gray-900">Haekal Alvegian</cite>
                            <cite class="ps-3 text-sm text-gray-500">Customer</cite>
                        </div>
                    </figcaption>
                </div>

                <!-- testimoni 4 -->
                <div style="margin-bottom: 3rem;">
                    <div class="flex items-center mb-2 text-yellow-300">
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FACA15" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-left text-sm font-semibold text-gray-900 lg:text-lg ">
                        "Services from rental car This outside normal! Clean and well-maintained cars, and friendly and responsive staff. Experience rent car it's really fun here."
                    </p>
                    <figcaption class="flex items-center mt-2 space-x-3 rtl:space-x-reverse">
                        <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-300">
                            <cite class="pe-3 font-medium text-gray-900 ">Afandi Effendi</cite>
                            <cite class="ps-3 text-sm text-gray-500">Customer</cite>
                        </div>
                    </figcaption>
                </div>
            </div>
        </div>
        <br>
    </div>
    </div>
</section>
{{-- Testimoni End --}}




@endsection