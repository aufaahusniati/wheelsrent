<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WheelsRent | Dashboard</title>
    <link rel="stylesheet" href="dist/output.css">

    {{-- Font-Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


    {{-- Tailwind --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>

    {{-- navbar --}}
    @include('dashboard.layouts.navbar')
    {{-- End Navbar --}}

    {{-- Sidebar --}}
    <div class="fixed left-0 top-0 w-64 h-full bg-primary p-4">
        @include('dashboard.layouts.sidebar')
    </div>
    {{-- End Sidebar --}}

    {{-- Content --}}
    <main class=" w-[calc(100%-256px)] min-h-screen ml-64 bg-gray-50">
        @yield('container')
    </main>
    {{-- End Content --}}
    @include('footer')



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>