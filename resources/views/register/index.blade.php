@extends('layouts.main')

@section('container')
<section>
    <div class="flex flex-col items-center justify-center mt-[100px] px-6 py-8 mx-auto md:h-screen lg:mt-[68px] lg:mb-2">
        <div class="w-full bg-primary bg-opacity-30 rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="space-y-2 md:space-y-3 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Registrasi
                </h1>
                <form class="space-y-4 md:space-y-6" action="#">
                    <div>
                        <label for="name"></label>
                        <input type="text" name="email" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"  placeholder="Nama Lengkap" required="">
                    </div>
                    <div>
                        <label for="email"></label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"  placeholder="Email" required="">
                    </div>
                    <div>
                        <label for="password"></label>
                        <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                    </div>
                    <div>
                        <label for="confirm-password"></label>
                        <input type="confirm-password" name="confirm-password" id="confirm-password" placeholder="Konfirmasi Password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                    </div>

                    <button type="submit" class="w-full text-white bg-primary hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-bold rounded-lg text-sm px-5 py-2 text-center">Buat Akun</button>
                    <p class="text-sm font-light text-dark">
                        Sudah punya akun? <a href="/login" class="font-bold text-primary-600 text-blue-700 hover:underline">Login disini</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
  </section>

@endsection