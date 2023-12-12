@extends('layouts.mainlogin')

@section('container')
<section class="pt-2">
    <div class="container">
        <div class="w-full lg:grid lg:grid-cols-2 lg:gap-2">
            <div class="flex flex-col items-center justify-center">
                <img src="/img/logo_team.png" class="w-[120px] lg:w-[250px]" h-70 alt="">
            </div>
            <div class="flex flex-wrap items-center justify-center lg:mr-20 lg:mt-[50px]">
                <div class="max-w-md mt-6 px-8 py-6 bg-primary bg-opacity-30 border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 lg:w-full">
                    <form class="space-y-5" action="#">
                        <h5 class="text-3xl font-bold text-center border-b-2 pb-3 text-gray-900">Login</h5>
                        <div>
                            <label for="email"></label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" required>
                        </div>
                        <div>
                            <label for="password"></label>
                            <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        </div>
                        <!-- Button Login -->
                        <button type="submit" class="w-full text-white bg-primary font-bold hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center">Login</button>
                        <!-- Button Login with Google -->
                        <button type="submit" class="flex items-start justify-center w-full text-primary bg-white font-bold hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5">
                            <img src="img/google.png" class="w-5 h-5" alt="">
                            Login with Google
                        </button> 

                        <div class="text-sm font-medium text-center text-gray-900">
                            Not Registated? <a href="/register" class="text-blue-700 hover:underline font-bold">Registrasi Now!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection