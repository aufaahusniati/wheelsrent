@extends('dashboard.layouts.main')

@section('container')
    <div class="bg-primary bg-opacity-20 mx-24 mt-14 rounded-xl">
        <div class="flex items-center justify-between py-10 mt-5 px-10">
            <h1 class=" text-xl font-semibold">Welcome Back, Admin!</h1>
        </div>
    </div>

    <div class="bg-primary bg-opacity-20 mx-24 mt-5 rounded-xl">
        <div class="flex flex-wrap items-center justify-center pt-5 ">
            <div class="grid grid-cols-3 gap-8 px-5">
                <a href="/dashboard/make">
                    <div class="bg-[#4CB9E7] rounded-lg hover:bg-[#3081D0] border-primary border-opacity-50 shadow shadow-gray-900">
                        <div class="flex justify-between">
                            <p class="pt-20 pl-4 font-bold text-xl">Make</p>
                            <svg class="w-20 h-20 mb-7 mt-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M280 24c0-13.3-10.7-24-24-24s-24 10.7-24 24v80c0 13.3 10.7 24 24 24s24-10.7 24-24V24zM185.8 224H326.2c6.8 0 12.8 4.3 15.1 10.6L360.3 288H151.7l19.1-53.4c2.3-6.4 8.3-10.6 15.1-10.6zm-75.3-10.9L82.2 292.4C62.1 300.9 48 320.8 48 344v40 64 32c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V448H384v32c0 17.7 14.3 32 32 32h16c17.7 0 32-14.3 32-32V448 384 344c0-23.2-14.1-43.1-34.2-51.6l-28.3-79.3C390.1 181.3 360 160 326.2 160H185.8c-33.8 0-64 21.3-75.3 53.1zM128 344a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm232 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zM39 39c-9.4 9.4-9.4 24.6 0 33.9l48 48c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L73 39c-9.4-9.4-24.6-9.4-33.9 0zm400 0L391 87c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l48-48c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0z"/>
                            </svg>
                        </div>
                    </div>
                </a>

                <a href="/dashboard/car">
                    <div
                        class=" bg-[#A6CF98] border-3 rounded-lg  hover:bg-[#557C55] border-green-500 border-opacity-50 shadow shadow-gray-900">
                        <div class="flex justify-between mx-4">
                            <p class="pt-20 pl-2 mr-4 font-bold text-xl">Cars</p>
                            <svg class="w-[90px] h-[90px] mb-5 mt-10" xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512">
                               <path fill="#000000" d="M171.3 96H224v96H111.3l30.4-75.9C146.5 104 158.2 96 171.3 96zM272 192V96h81.2c9.7 0 18.9 4.4 25 12l67.2 84H272zm256.2 1L428.2 68c-18.2-22.8-45.8-36-75-36H171.3c-39.3 0-74.6 23.9-89.1 60.3L40.6 196.4C16.8 205.8 0 228.9 0 256V368c0 17.7 14.3 32 32 32H65.3c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80H385.3c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80H608c17.7 0 32-14.3 32-32V320c0-65.2-48.8-119-111.8-127zM434.7 368a48 48 0 1 1 90.5 32 48 48 0 1 1 -90.5-32zM160 336a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="/dashboard/reservation">
                    <div
                        class="bg-[#FEFFAC] mb-8 rounded-lg hover:bg-[#F4E869]  border-yellow-500 border-opacity-50 shadow shadow-gray-900">
                        <div class="flex justify-between">
                            <p class="pt-16 pl-2 mr-4 ml-4 font-bold text-xl">Rent</p>
                            <svg class="w-[70px] h-[70px] mb-10 mr-2 mt-10" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                <path fill="#000000" d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"/>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
