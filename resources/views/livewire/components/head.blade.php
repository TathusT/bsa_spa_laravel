<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap5.0.2/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/solid.css') }}">

    <link rel="stylesheet" href="{{ asset('css/splide-4/dist/css/splide.min.css') }}">

    <script src="{{ asset('css/splide-4/dist/js/splide.min.js') }}"></script>
    <script src="{{ asset('css/bootstrap5.0.2/js/bootstrap.bundle.min.js') }}"></script>
    <!-- <script src="assets/bootstrap5.0.2/js/bootstrap.min.js"></script> -->
    @livewireStyles
    @livewireScripts
</head>