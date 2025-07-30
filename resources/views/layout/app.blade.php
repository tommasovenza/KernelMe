<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Vite Includes --}}
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    {{-- Page Title --}}
    <title>@yield('page_title', 'KernelMe')</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <div class="image-logo">
                    {{-- <img src="{{asset('images/logo/logo.svg')}}" alt="logo"> --}}
                    <img src="{{asset('images/logo/tommino.svg')}}" alt="logo">
                </div>
                <div class="image-text">
                    <span class="text-xl font-semibold tracking-wide">Tommaso Venza</span>
                </div>
            </div>
            <div class="navigation">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Uses</a></li>
                    <li><a href="{{ route('contacts') }}">Contacts</a></li>
                    <li>
                        <a href="#" class="icon">
                            {{-- icon --}}
                            {{-- <i class="fa-solid fa-sun"></i> --}}
                            <i class="fa-solid fa-moon"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    {{-- Main --}}
    <main>
        @yield('content')
    </main>
</body>
</html>