@extends('layouts.mainlogin')

@section('container')
    <section class="pt-2">
        <div class="container">
            <div class="w-full lg:grid lg:grid-cols-2 lg:gap-2">
                <div class="flex flex-col items-center justify-center">
                    <img src="/img/logo_team.png" class="w-[120px] lg:w-[250px] lg:mt-14" h-70 alt="">
                </div>
                <div class="flex flex-wrap items-center justify-center lg:mr-20 lg:mt-[50px]">
                    <!-- alert registration success -->
                    @if (session()->has('success'))
                        <div class="p-4 mb-4 mt-2 text-sm text-green-800 rounded-lg bg-green-300" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- alert login failed -->
                    @if (session()->has('loginError'))
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-300" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div
                        class="max-w-md px-8 py-6 bg-primary bg-opacity-30 border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 lg:w-full">
                        <form class="space-y-5" action="/login" method="post">
                            @csrf
                            <h5 class="text-3xl font-bold text-center border-b-2 pb-3 text-gray-900">Login</h5>
                            <div>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('email') invalid:border-red-500 @enderror"
                                    placeholder="Email" autofocus value="{{ old('email') }}">
                                {{-- @error('email')
                                <div class="text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror --}}
                            </div>
                            <div>
                                <label for="password"></label>
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('password') invalid:border-red-500 @enderror">
                                {{-- @error('password')
                                    <div class="text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror --}}

                            </div>
                            <!-- Button Login -->
                            <button type="submit"
                                class="w-full text-white bg-primary font-bold hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center">Login</button>
                            <p class="text-center">Or</p>

                            <!-- Button Login with Google -->
                            <button type="submit"
                                class="flex items-start justify-center w-full text-primary bg-white font-bold hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5">
                                <img src="img/google.png" class="w-5 h-5" alt="">
                                <a href="{{ route('google.login') }}"> Login with Google</a>
                            </button>

                            <div class="text-sm font-medium text-center text-gray-900">
                                Not Registered? <a href="/register" class="text-blue-700 hover:underline font-bold">Register
                                    Now!</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
