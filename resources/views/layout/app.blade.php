<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('/images/head.ico') }}" />
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
                <a href="{{ route('home') }}" class="block flex items-center gap-4">
                    <div class="image-logo">
                    <img src="{{asset('images/head.ico')}}" alt="logo">
                </div>
                <div class="image-text">
                    <span class="text-xl font-semibold tracking-wide">Tommaso Venza</span>
                </div>
                </a>
            </div>
            <div class="navigation">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('contacts') }}">Contacts</a></li>
                    {{-- If Auth --}}
                    @auth
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                    @endauth
                    <li>
                        <a href="#" class="icon">
                            {{-- icon --}}
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

    <footer class="footer pt-2">
        <div class="container">
            {{-- footer info --}}
            <div class="footer-info-container flex justify-between items-center">
                <div class="footer-info">
                    <span class="block font-semibolg text-sm">Tommaso Venza</span>
                    <span class="block text-sm">&copy; {{ date("Y") }}</span>
                </div>
                {{-- Social --}}
                <div class="social">
                    <ul class="footer-social-menu">
                        <li><a href="https://github.com/tommasovenza"><i class="fa-brands fa-github"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/tommasovenza/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="https://x.com/tomminoDev"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/tommibommi"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/tommasovenza/"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>
</body>
</html>