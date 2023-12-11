@extends('layouts.main')

@section('container')
<div class="flex flex-col items-center justify-center mt-[100px] lg:mt-[120px]">
    <div class="w-full sm:max-w-md mt-6 px-8 py-6 bg-primary bg-opacity-30 border border-gray-200 rounded-lg shadow sm:p-6 md:p-8">
        <form class="space-y-5" action="#">
            <h5 class="text-3xl font-bold text-center border-b-2 pb-3 text-gray-900">Login</h5>
            <div>
                <label for="email" class="block mb-2 mt-10 text-lg font-bold text-gray-900">Email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@company.com" required>
            </div>
            <div>
                <label for="password" class="block mb-2 text-lg font-bold text-gray-900 ">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
            
            <button type="submit" class="w-full text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login</button>
            <div class="text-sm font-medium text-gray-900 dark:text-gray-300">
                Belum Registrasi? <a href="/register" class="text-blue-700 hover:underline font-bold">Registrasi Sekarang!</a>
            </div>
        </form>
    </div>
</div>

@endsection