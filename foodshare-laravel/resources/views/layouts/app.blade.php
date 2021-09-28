<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <div>
        <!-- Page Heading -->
        <header>
            <a href="/" class="logo">FoodShare</a>
            @include('layouts.navigation')
        </header>
        <!-- Page Content -->
        <main>
            <div>
                {{ $header }}
            </div>
            {{ $slot }}
        </main>
    </div>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>