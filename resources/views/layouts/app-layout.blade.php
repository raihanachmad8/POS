<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-gray-200 dark:bg-gray-900">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="{{ $description ?? 'Point of Sale'}}">
    <meta name="keywords" content="{{ $keywords ?? 'point of sale'}}">
    {{-- Tailwin css --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font awesome --}}
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    {{-- Favicon --}}

    {{-- Custom css --}}
    @stack('styles')

</head>
<body>
    <div class="min-h-screen relative ">
    @include('layouts.navigation')
    @if (isset($header))
        {{ $header }}
    @endif

    {{ $slot }}

    @if (isset($footer))
        {{ $footer }}
    @endif
    </div>

    {{-- Custom js --}}
    <script>
        const login = document.querySelector('.login');
        const closeLogin = document.querySelector('.close_login');

        function showLogin() {
            login.classList.toggle('hidden');
        }

        closeLogin.addEventListener('click', showLogin);


    </script>
    @stack('scripts')
</body>
</html>
