@extends('layouts.main')

@section('container')
<!-- Hero Section Start -->
<section id="home" class="pt-36">
    <div class="container">
        <div id="controls-carousel" class="relative w-full z-0" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Slide 1 -->
                <div class="flex flex-wrap duration-700 ease-in-out bg-white" data-carousel-item="active">
                    <img src="/img/slide1.jpg" class="absolute block bg-opacity-10 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute w-full self-center ml-[65px] lg:w-1/2">
                        <h1 class="text-xs font-bold text-white lg:text-4xl">Dapatkan pengalaman terbaik Anda dengan WheelsRent</h1>
                        <p class="text-xs mt-3 mb-5 mr-20 text-slate-300 leading-relaxed lg:text-lg">Memberikan transportasi dan solusi terbaik untuk menjawab kebutuhan mobilitas anda sehari-hari</p>

                        <a href="/reservation" class="text-xs font-semibold text-white bg-primary py-[8px] px-[15px] rounded-full hover:bg-white hover:text-primary transition duration-300 ease-in-out lg:text-base lg:py-2 lg:px-8 ">Reservation</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="flex flex-wrap duration-700 ease-in-out bg-white" data-carousel-item>
                    <img src="/img/slide2.jpg" class="absolute block w-full bg-opacity-10 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute w-full self-center ml-[65px] lg:w-1/2">
                        <h1 class="text-xs font-bold text-white lg:text-4xl">Jasa Sewa Mobil Bandung</h1>
                        <p class="text-xs mt-2 mb-3 mr-[80px] text-slate-300 leading-relaxed lg:text-lg">WheelsRent merupakan perusahaan yang bergerak dibidang jasa rental sesuai dengan kebutuhan pelanggan.</p>

                        <a href="#" class="text-xs font-semibold text-white bg-primary py-[5px] px-[15px] rounded-full hover:bg-white hover:text-primary transition duration-300 ease-in-out lg:text-base lg:py-2 lg:px-8">Cek Harga</a>
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
        <div class="gap-3 lg:grid lg:grid-cols-3">
            <!-- Cards 1 -->
            <div class="w-full mx-auto my-5 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex items-center justify-center">
                    <svg class="w-[30px] h-[30px]" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                        <path fill="#000174" d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                    </svg>
                </div>
                <h5 class="mb-2 mt-2 text-base text-center font-bold tracking-tight text-primary lg:text-xl">Pilihan Armada Terlengkap</h5>
                <p class="text-xs text-gray-700 lg:text-sm">WheelsRent menawarkan beragam pilihan mobil dari berbagai merek dan model.</p>
            </div>

            <!-- Cards 2 -->
            <div class="w-full mx-auto my-5 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex items-center justify-center">
                    <svg class="w-[30px] h-[30px]" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                        <path fill="#000174" d="M4.1 38.2C1.4 34.2 0 29.4 0 24.6C0 11 11 0 24.6 0H133.9c11.2 0 21.7 5.9 27.4 15.5l68.5 114.1c-48.2 6.1-91.3 28.6-123.4 61.9L4.1 38.2zm503.7 0L405.6 191.5c-32.1-33.3-75.2-55.8-123.4-61.9L350.7 15.5C356.5 5.9 366.9 0 378.1 0H487.4C501 0 512 11 512 24.6c0 4.8-1.4 9.6-4.1 13.6zM80 336a176 176 0 1 1 352 0A176 176 0 1 1 80 336zm184.4-94.9c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z" />
                    </svg>
                </div>
                <h5 class="mb-2 mt-2 text-base text-center font-bold tracking-tight text-primary lg:text-xl">Kualitas dan Keandalan</h5>
                <p class="text-xs text-gray-700 lg:text-sm">Setiap mobil WheelsRent selalu dalam kondisi prima dan siap menghadapi perjalanan jauh atau pendek dengan performa yang optimal.</p>
            </div>

            <!-- Cards 3 -->
            <div class="w-full mx-auto my-5 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex items-center justify-center">
                    <svg class="w-[30px] h-[30px]" xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512">
                        <path fill="#000174" d="M163.9 136.9c-29.4-29.8-29.4-78.2 0-108s77-29.8 106.4 0l17.7 18 17.7-18c29.4-29.8 77-29.8 106.4 0s29.4 78.2 0 108L310.5 240.1c-6.2 6.3-14.3 9.4-22.5 9.4s-16.3-3.1-22.5-9.4L163.9 136.9zM568.2 336.3c13.1 17.8 9.3 42.8-8.5 55.9L433.1 485.5c-23.4 17.2-51.6 26.5-80.7 26.5H192 32c-17.7 0-32-14.3-32-32V416c0-17.7 14.3-32 32-32H68.8l44.9-36c22.7-18.2 50.9-28 80-28H272h16 64c17.7 0 32 14.3 32 32s-14.3 32-32 32H288 272c-8.8 0-16 7.2-16 16s7.2 16 16 16H392.6l119.7-88.2c17.8-13.1 42.8-9.3 55.9 8.5zM193.6 384l0 0-.9 0c.3 0 .6 0 .9 0z" />
                    </svg>
                </div>
                <h5 class="mb-2 mt-2 text-base text-center font-bold tracking-tight  text-primary lg:text-xl">Fasilitas</h5>
                <p class="text-xs text-gray-700 lg:text-sm">WheelsRent tersedia sewa mobil harian, mingguan dan bulanan serta tersedia penyewaan lepas kunci maupun dengan driver. </p>
            </div>
        </div>
    </div>
</section>
<!-- Cards Section End -->

<!-- Tentang Kami Section Start -->
<section id="about" class="pt-36 w-full bg-primary bg-opacity-10 ">
    <div class="container">
        <div class="gap-2 mx-auto lg:grid lg:grid-cols-2">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="/img/tentangkami.png" alt="">
            </div>
            <div>
                <h1 class="text-xl uppercase font-extrabold text-primary lg:text-4xl">Tentang WheelsRent</h1>
                <p class="text-sm mt-3 mb-5 text-dark lg:text-lg">Wheelsrent memberikan Anda pengalaman terbaik dengan solusi transportasi sewa mobil dan layanan pengemudi profesional. Memulai perjalanannya dengan menyewa lima mobil pada tahun 2023, wheelsrent telah berkembang menjadi salah satu perusahaan transportasi terbesar di Indonesia di bawah PT Ode to Code. Saat ini Wheelsrent memiliki 30 ribu kendaraan yang siap melayani Anda, siap menunjang kebutuhan mobilitas Anda. Dengan menjunjung tinggi profesionalitas, Wheelsrent telah dipercaya oleh ribuan pelanggan bisnis maupun individu.</p>

                <a href="#" class="text-xs font-semibold py-[7px] px-[15px] text-white bg-primary rounded-full border-2 border-primary hover:bg-white hover:text-primary focus:z-10 focus:ring-2 focus:ring-primary focus:text-primary dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white lg:text-base lg:py-2 lg:px-8">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
<!-- Tentang Kami Section End -->

<!-- Unit Unggulan Section Start -->
<section id="type" class="pt-36">
    <div class="container">
        <div class="flex-wrap items-center justify-center text-center">
            <p class="text-gray-400 text-sm">AVAILABLE CARS</p>
            <h1 class="font-black text-4xl mb-2">Explore the Top Cars</h1>
            <p class="text-base mb-4">WheelsRent have various car classes. Select your perfect fit on.</p>
        </div>
        <div class="gap-3 lg:grid lg:grid-cols-3">
            <!-- Cards 1-->
            <div class="max-w-sm mx-auto my-6 bg-white border border-gray-200 rounded-lg shadow-xl">
                <img class="rounded-t-lg" src="/img/nissan.jpg" alt="" />
                <div class="p-5">
                    <!-- Model Car -->
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Skyline GT</h5>
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
                                <p class="font-semibold">NISSAN</p>
                            </div>
                        </div>
                        <!-- Transmission -->
                        <div class="flex items-center">
                            <div class="flex items-center justify-center border border-primary rounded-lg h-[30px] w-[32px]">
                                <img src="/img/transmission.png" class="w-[25px] h-[25px]" alt="">
                            </div>
                            <div class="m-2 text-[12px]">
                                <p>TRANSMISSION</p>
                                <p class="font-semibold">MATIC</p>
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
                                <p class="font-semibold">BENSIN</p>
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
                                <p class="font-semibold">150.000</p>
                            </div>
                        </div>
                    </div>
                    <!-- Button Reservasi -->
                    <div class="flex justify-center items-center mt-4 mr-[40px]">
                        <a href="#" class="inline-flex items-center px-2 py-1 text-sm font-medium  text-white bg-primary rounded-full border-2 border-primary hover:bg-white hover:text-primary focus:z-10 focus:ring-2 focus:ring-primary focus:text-primary">
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                                <path fill="white" d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                            </svg>
                            <p class="px-2">Reservation</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="max-w-sm mx-auto my-6 bg-white border border-gray-200 rounded-lg shadow-xl">
                <img class="rounded-t-lg" src="/img/nissan.jpg" alt="" />
                <div class="p-5">
                    <!-- Model Car -->
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Skyline GT</h5>
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
                                <p class="font-semibold">NISSAN</p>
                            </div>
                        </div>
                        <!-- Transmission -->
                        <div class="flex items-center">
                            <div class="flex items-center justify-center border border-primary rounded-lg h-[30px] w-[32px]">
                                <img src="/img/transmission.png" class="w-[25px] h-[25px]" alt="">
                            </div>
                            <div class="m-2 text-[12px]">
                                <p>TRANSMISSION</p>
                                <p class="font-semibold">MATIC</p>
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
                                <p class="font-semibold">BENSIN</p>
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
                                <p class="font-semibold">150.000</p>
                            </div>
                        </div>
                    </div>
                    <!-- Button Reservasi -->
                    <div class="flex justify-center items-center mt-4 mr-[40px]">
                        <a href="#" class="inline-flex items-center px-2 py-1 text-sm font-medium  text-white bg-primary rounded-full border-2 border-primary hover:bg-white hover:text-primary focus:z-10 focus:ring-2 focus:ring-primary focus:text-primary">
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                                <path fill="white" d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                            </svg>
                            <p class="px-2">Reservation</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="max-w-sm mx-auto my-6 bg-white border border-gray-200 rounded-lg shadow-xl">
                <img class="rounded-t-lg" src="/img/nissan.jpg" alt="" />
                <div class="p-5">
                    <!-- Model Car -->
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Skyline GT</h5>
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
                                <p class="font-semibold">NISSAN</p>
                            </div>
                        </div>
                        <!-- Transmission -->
                        <div class="flex items-center">
                            <div class="flex items-center justify-center border border-primary rounded-lg h-[30px] w-[32px]">
                                <img src="/img/transmission.png" class="w-[25px] h-[25px]" alt="">
                            </div>
                            <div class="m-2 text-[12px]">
                                <p>TRANSMISSION</p>
                                <p class="font-semibold">MATIC</p>
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
                                <p class="font-semibold">BENSIN</p>
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
                                <p class="font-semibold">150.000</p>
                            </div>
                        </div>
                    </div>
                    <!-- Button Reservasi -->
                    <div class="flex justify-center items-center mt-4 mr-[40px]">
                        <a href="#" class="inline-flex items-center px-2 py-1 text-sm font-medium  text-white bg-primary rounded-full border-2 border-primary hover:bg-white hover:text-primary focus:z-10 focus:ring-2 focus:ring-primary focus:text-primary">
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                                <path fill="white" d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                            </svg>
                            <p class="px-2">Reservation</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Unit Unggulan Section End -->

@endsection