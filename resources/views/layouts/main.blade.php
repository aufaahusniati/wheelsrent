<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])

    {{-- Font-Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>WheelsRent</title>
</head>

<body>
    @include('partials.navbar')
    @yield('container')
    @include('partials.footer')
</body>

{{-- script js --}}
<script src="/js/script.js"></script>

{{-- Date Picker --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>

{{-- vanilla tilt --}}
<script type="text/javascript" src="/js/vanilla-tilt.min.js"></script>
<script type="text/javascript">
    VanillaTilt.init(document.querySelector(".car-img"), {
        max: 25,
        speed: 400
    });
    
    //It also supports NodeList
    // VanillaTilt.init(document.querySelectorAll(".your-element"));
</script>

</html>