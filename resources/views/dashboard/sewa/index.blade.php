@extends('dashboard.layouts.main')

@section('container')
<div class="flex items-center justify-between py-10 mt-5 px-10">
    <h1 class="font-poppins text-5xl font-semibold">Data Rent</h1>
</div>

<div class="relative px-24 overflow-x-auto flex flex-wrap justify-center shadow-md ">
    
    <table class="w-full text-xl text-center rtl:text-right font-ponppins text-black dark:text-white border-x-2 border-y-2 border-black">
        <thead class="text-base font-ponppins border-b-2 border-black text-black uppercase bg-primary bg-opacity-70 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    id
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Name Customer
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Model
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Start Date
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    End Date
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Status
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
                    David Pamungkas
                </td>
                <td class="border-black border-2">
                    Honda Cr-v
                </td>
                <td class="border-black border-2">
                    12-12-2023
                </td>
                <td class="border-black border-2">
                    24-12-2023
                </td>
                <td class="border-black border-2 text-green-500">
                    Active
                </td>
                
            </tr>           
        </tbody>
        {{-- End Isi Table--}}
    </table>
</div>
@endsection