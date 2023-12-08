@extends('layouts.main')

@section('container')

    <!-- Hero Section Start -->
    <section id="home" class="pt-36">
        <div class="container">
            <div id="controls-carousel" class="relative w-full z-0" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="flex flex-wrap duration-700 ease-in-out bg-white" data-carousel-item="active" >
                        <img src="/img/slide1.jpg" class="absolute block w-full bg-opacity-10 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" style="background-color: rgba(0, 0, 0, 0.6)" alt="...">
                        <div class="absolute w-full self-center ml-[65px] lg:w-1/2">
                            <h1 class="text-base font-bold text-white lg:text-4xl">Dapatkan pengalaman terbaik Anda dengan WheelsRent</h1>
                            <p class="text-xs mt-3 mb-5 mr-20 text-slate-300 leading-relaxed lg:text-lg">Memberikan transportasi dan solusi terbaik untuk menjawab kebutuhan mobilitas anda sehari-hari</p>
                                
                            <a href="#" class="text-xs font-semibold text-white bg-primary py-[8px] px-[15px] rounded-full hover:bg-white hover:text-primary transition duration-300 ease-in-out lg:text-base lg:py-2 lg:px-8 ">Reservasi</a>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex flex-wrap duration-700 ease-in-out bg-white" data-carousel-item >
                        <img src="/img/slide2.jpg" class="absolute block w-full bg-opacity-10 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" style="background-color: rgba(0, 0, 0, 0.6)" alt="...">
                        <div class="absolute w-full self-center ml-[65px] lg:w-1/2">
                            <h1 class="text-base font-bold text-white lg:text-4xl">Jasa Sewa Mobil Bandung</h1>
                            <p class="text-xs mt-3 mb-5 mr-[80px] text-slate-300 leading-relaxed lg:text-lg">WheelsRent merupakan perusahaan yang bergerak dibidang jasa rental sesuai dengan kebutuhan pelanggan.</p>

                            <a href="#" class="text-xs font-semibold text-white bg-primary py-[7px] px-[15px] rounded-full hover:bg-white hover:text-primary transition duration-300 ease-in-out lg:text-base lg:py-2 lg:px-8 ">Cek Harga</a>
                        </div>
                    </div>
                </div>

                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

@endsection

