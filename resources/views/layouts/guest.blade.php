<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Weather') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex flex-col justify-center items-center h-screen pt-6 sm:pt-0">
        <a href="/" wire:navigate aria-label="logo" class="flex space-x-2 items-center">
            <img src="{{ asset('img/logo.png') }}" class="w-12" alt="logo" width="144" height="133">
            <span class="text-2xl font-bold text-yellow-900 ">Weather|<span class="text-yellow-700 ">App</span></span>
        </a>
        <div class="w-full sm:max-w-md px-6 bg-gray-100 p-10 shadow-md overflow-hidden sm:rounded-lg mt-6">
            {{ $slot }}
        </div>
    </div>
</body>

</html>