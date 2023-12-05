<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WheelsRent | Dashboard</title>
    <link rel="stylesheet" href="dist/output.css">

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
    
    {{-- main dashboard --}}
    
    
    {{-- End main dashboard --}}
    
    {{-- Content --}}
    <main class=" w-[calc(100%-256px)] min-h-screen ml-64 bg-gray-50">
        @yield('container')  
    </main>
    {{-- End Content --}}

   
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>