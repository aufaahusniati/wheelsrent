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

{{-- Sidebar --}}
@include('dashboard.layouts.sidebar')
{{-- End Sidebar --}}

{{-- navbar --}}
@include('dashboard.layouts.navbar')
{{-- End Navbar --}}

{{-- Content --}}
@include('dashboard.layouts.content')
{{-- End Content --}}
   
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>