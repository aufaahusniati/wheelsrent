@extends('dashboard.layouts.main')

@section('container')
<div class="flex items-center justify-between py-10 mt-5 px-10">
    <h1 class="font-poppins text-5xl font-semibold">Daftar Mobil</h1>
</div>

{{-- head table --}}
<div class="relative px-24 overflow-x-auto  shadow-md sm:rounded-lg">
    <a href="/dashboard/posts/create">
    <button type="submit" class=" font-semibold hover:text-white border-2 border-primary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white
     dark:hover:bg-blue-500 dark:focus:ring-blue-800">+ Tambah Data</button>
    </a>
    <table class="w-full text-xl text-left rtl:text-right font-ponppins text-black dark:text-white border-x-2 border-y-2 border-black">
        <thead class="text-base font-ponppins border-b-2 border-black text-black uppercase bg-primary bg-opacity-70 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    id
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Tipe
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Jenis Mobil
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Tahun
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Transmission
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Bahan Bakar
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>               
            </tr>
        </thead>
        {{-- End Head Table --}}

        {{-- Isi table --}}
        <tbody>
            <tr class="odd:bg-white  text-center text-xl odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </th>
                <td class="border-black border-2">
                    honda cr-v
                </td>
                <td class="border-black border-2">
                    sedan
                </td>
                <td class="border-black border-2">
                    2020
                </td>
                <td class="border-black border-2">
                    Automatic
                </td>
                <td class="border-black border-2">
                    Bensin
                </td>
                <td class="px-6 py-4 flex justify-between  ">
                    <a href="#" class="font-medium hover:underline  py-5">
                        <svg class="w-6 h-6 text-gray-800 bg-sky-300 rounded-md dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                            <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                              <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                              <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z"/>
                            </g>
                          </svg>
                    </a>
                    <a href="#" class="font-medium hover:underline px-2 py-5">
                        <svg class="w-6 h-6 text-gray-800 bg-amber-300 rounded-md dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z"/>
                            <path d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z"/>
                          </svg>
                    </a>
                    <a href="#" class="font-medium hover:underline py-5">
                        <svg class="w-6 h-6 text-gray-800 bg-red-400 rounded-md dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
                          </svg>
                    </a>
                </td>
            </tr>           
        </tbody>
        {{-- End Isi Table--}}
    </table>
</div>

@endsection