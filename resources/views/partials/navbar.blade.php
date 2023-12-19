<!-- Header Start -->
<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="#home" class="font-bold text-lg text-primary block py-2">
                <img src="/img/logo_team.png" width="75px" alt="Flowbite Logo" /></a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
                
                <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none lg:opacity-100" >
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="#home" class="text-base font-bold text-dark decoration-dark py-2 mx-8 flex group-hover:text-primary">Home</a>
                        </li>
                        <li class="group">
                            <a href="#about" class="text-base font-bold text-dark py-2 mx-8 flex group-hover:text-primary">About Us</a>
                        </li>
                        <li class="group">
                            <a href="#type" class="text-base font-bold text-dark py-2 mx-8 flex group-hover:text-primary">Type Car</a>
                        </li>
                        <li class="group my-1 mx-10 lg:my-0 lg:mx-4">
                            <button type="button" class="py-2 px-8 me-2 mb-2 font-base font-extrabold text-primary  focus:outline-none bg-white rounded-full border-2 border-primary hover:bg-primary hover:text-white focus:z-10 focus:ring-4 focus:ring-white">Reservation</button>
                        </li>
                    
                        @auth
                        <div class="flex  items-center ml-16 mt-2 lg:mt-0  text-primary hover:opacity-30">
                            <button type="button" class="text-base mr-[70px] lg:mr-0 inline-flex font-bold" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                                <span class="sr-only"></span>
                                <p class="-indent-40 ml-24">Welcome, {{ auth()->user()->name }}</p>
                                <div class="ml-2 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512">
                                        <path fill="currentColor" d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                                    </svg>
                            </button>
                        </div>

                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-[#EDF2F4] divide-y divide-gray-300 rounded-lg shadow" id="user-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900 ">{{ auth()->user()->name }}</span>
                                <span class="block text-sm text-gray-500 truncate">{{ auth()->user()->email }}</span>
                            </div>
                                <ul class="py-2" aria-labelledby="user-menu-button">
                                    <li>
                                        <a href="/dashboard" class="drop block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">My Dashboard</a>
                                    </li>
                                </ul>
                                <ul class="py-2" aria-labelledby="user-menu-button">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="drop block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                                    </form>
                                </ul>
                            </div>
                        </div>

                        @else
                            <ul class="group mx-10 lg:mx-[-10px]">
                                <a href="/login">
                                <button type="button" class="inline-flex items-center px-8 py-2 font-base font-extrabold text-white bg-primary rounded-full border-2 border-primary hover:bg-white hover:text-primary focus:z-10 focus:ring-2 focus:ring-primary focus:text-primary">
                                    <svg class="w-5 h-5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 15">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 7.5h11m0 0L8 3.786M12 7.5l-4 3.714M12 1h3c.53 0 1.04.196 1.414.544.375.348.586.82.586 1.313v9.286c0 .492-.21.965-.586 1.313A2.081 2.081 0 0 1 15 14h-3"/>
                                    </svg>
                                    Login 
                                </button></a>
                            </ul>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->