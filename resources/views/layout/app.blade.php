<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Vite Includes --}}
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    {{-- Page Title --}}
    <title>@yield('page_title', 'KernelMe')</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <div class="image-logo">
                <img src="{{asset('images/logo/logo.svg')}}" alt="logo">
            </div>
            <div class="image-text">
                <span class="text-lg">Tommaso Venza</span>
            </div>
        </div>
        <div class="navigation">
            <ul>
                <li><a href="#">Test</a></li>
                <li><a href="#">Test</a></li>
                <li><a href="#">Test</a></li>
                <li><a href="#">Test</a></li>
                <li><a href="#">Test</a></li>
            </ul>
        </div>
    </header>
    {{-- Main --}}
    <main>
        @yield('content')
    </main>
</body>
</html>