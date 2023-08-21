<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap5.0.2/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/solid.css') }}">

    <link rel="stylesheet" href="{{ asset('css/splide-4/dist/css/splide.min.css') }}">

    <script src="{{ asset('css/splide-4/dist/js/splide.min.js') }}"></script>
    <script src="{{ asset('css/bootstrap5.0.2/js/bootstrap.bundle.min.js') }}"></script>
    @yield('afterStyles')
    @livewireStyles
    @livewireScripts
</head>
<body>
    
    @livewire('components.header')
    @include('livewire.components.AOS')

    <div class="content">
        @yield('body')
    </div>

    {{-- @include('livewire.components.footer') --}}
    @yield('afterScripts')
</body>
</html>