@extends('layout.app')

@section('title', 'Tommaso Venza | Laravel, PHP and JS Web Developer')

@section('meta_description',
    'Portfolio of Tommaso Venza, web developer based in Italy. I work with Laravel, PHP and
    JavaScript to build web applications, internal tools and content-driven sites, from backend logic to user interfaces.')

@section('canonical', route('home'))

@section('content')
    <div class="container pt-10 pb-10">
        {{-- Hero Section --}}
        <div class="home-heading">
            <h1 class="text-3xl font-semibold mb-4">Hey there 👋, I'm <span class="name">Tommaso Venza</span></h1>
            <p class="text-lg hero-subtitle">Web developer working with Laravel, PHP, JS and modern web stacks.</p>
        </div>
        <p class="hero-description text-lg mt-4">
            I build and maintain web applications, internal tools and content-driven sites.
            From backend logic to the user interface, I like shipping things that actually work.
        </p>

        <div class="hero-actions mt-4">
            <a href="{{ route('contacts') }}"
                class="rounded-md bg-blue-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 disabled:bg-blue-200 disabled:text-gray-600 cursor-pointer inline-block mt-2">
                <i class="fa-solid fa-arrow-right"></i> Get in touch
            </a>
        </div>
    </div>
    {{-- About --}}
    <section class="about" id="about">
        <div class="container text-lg pb-4">
            <div class="content">
                <div class="about-card">
                    <h2>About</h2>
                    <p>
                        I’m a web developer based in Italy. I currently work on a clinical trials
                        management platform at <strong>Siena Imaging</strong>, dealing with both
                        development and day-to-day technical operations in a medical and enterprise context.
                    </p>
                    <p>
                        Alongside my main job, I build personal projects to explore ideas and improve my skills:
                        this portfolio, a Last.fm dashboard, a small PHP job board and other experiments.
                        I enjoy working across the stack, with a focus on clean backend code and simple,
                        readable interfaces.
                    </p>
                </div>
                <div class="what-i-do-card">
                    <h2>What I work on</h2>

                    <ul>
                        <li>Web applications and internal tools built with Laravel.</li>
                        <li>Content-driven websites with custom backends.</li>
                        <li>API integrations and small dashboards.</li>
                        <li>Maintenance and refactoring of existing PHP/Laravel projects.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- Tech Section --}}
    <section class="max-w-4xl mx-auto mt-10 px-6 tech" id="tech">
        <h2 class="text-lg font-semibold mb-4">Tech I work with</h2>

        <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-4 text-sm text-gray-300">
            <div class="flex flex-col items-center gap-1">
                <span class="text-2xl"><img src="{{ asset('/images/tech-logos/laravel.svg') }}" alt="laravel" /></span>
                <span>Laravel</span>
            </div>
            <div class="flex flex-col items-center gap-1">
                <span class="text-2xl"><img src="{{ asset('/images/tech-logos/php.svg') }}" alt="php" /></span>
                <span>PHP</span>
            </div>
            <div class="flex flex-col items-center gap-1">
                <span class="text-2xl"><img src="{{ asset('/images/tech-logos/javascript.svg') }}"
                        alt="javascript" /></span>
                <span>JavaScript</span>
            </div>
            <div class="flex flex-col items-center gap-1">
                <span class="text-2xl"><img src="{{ asset('/images/tech-logos/tailwind.svg') }}" alt="tailwind" /></span>
                <span>Tailwind CSS</span>
            </div>
            <div class="flex flex-col items-center gap-1">
                <span class="text-2xl"><img src="{{ asset('/images/tech-logos/mysql.svg') }}" alt="mysql" /></span>
                <span>MySQL</span>
            </div>
            <div class="flex flex-col items-center gap-1">
                <span class="text-2xl"><img src="{{ asset('/images/tech-logos/git.svg') }}" alt="git" /></span>
                <span>Git / GitHub</span>
            </div>
        </div>
    </section>

    {{-- Client Projects Section --}}
    <section class="projects client-project pt-12 pb-12" id="client-projects">
        <div class="container">
            {{-- Heading Project --}}
            <div class="heading-projects p-4">
                <h2 class="text-center text-2xl text-blue-500 font-semibold">Client Projects</h2>
            </div>
            {{-- Grid --}}
            <div class="projects-container pt-4">
                {{-- First Project --}}
                <div class="project">
                    <div class="project-card"
                        style="background-image: url('{{ asset('/images/projects/flixxmovie.jpg') }}');">
                        <div class="project-name">JS</div>
                        {{-- Anchor --}}
                        <a href="https://flixxmovie.netlify.app/" target="_blank" rel="noopener noreferrer">
                            <div class="overlay">
                                <div class="text-2xl">FlixxMovie</div>
                            </div>
                        </a>
                    </div>

                    {{-- Bottom Content --}}
                    <div class="project-content mt-4 flex justify-between items-center">
                        <div class="github-link">
                            <a href="https://github.com/tommasovenza/flixx-app" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('/images/tech-logos/github.svg') }}" alt="github logo"
                                    style="height: 40px">
                            </a>
                        </div>

                        <div class="project-link">
                            <a href="https://flixxmovie.netlify.app/" target="_blank"
                                rel="noopener noreferrer">FlixxMovie</a>
                        </div>
                    </div>
                </div>

                {{-- Second Project --}}
                <div class="project">
                    <div class="project-card"
                        style="background-image: url('{{ asset('/images/projects/workopia.jpg') }}');">
                        <div class="project-name">PHP</div>
                        <a href="https://www.workopia.it/" target="_blank" rel="noopener noreferrer">
                            <div class="overlay">
                                <div class="text-2xl">Workopia</div>
                            </div>
                        </a>
                    </div>

                    {{-- Bottom Content --}}
                    <div class="project-content mt-4 flex justify-between items-center">
                        <div class="github-link">
                            <a href="https://github.com/tommasovenza/workopia-php" target="_blank"
                                rel="noopener noreferrer">
                                <img src="{{ asset('/images/tech-logos/github.svg') }}" alt="github logo"
                                    style="height: 40px">
                            </a>
                        </div>

                        <div class="project-link">
                            <a href="https://www.workopia.it/" target="_blank" rel="noopener noreferrer">Workopia</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    {{-- Projects Section --}}
    <section class="projects pt-12 pb-12">
        <div class="container">
            {{-- Heading Project --}}
            <div class="heading-projects p-4">
                <h2 class="text-center text-2xl text-blue-500 font-semibold">Projects</h2>
            </div>
            {{-- Grid --}}
            <div class="projects-container pt-4">
                {{-- First Project --}}
                <div class="project">
                    <div class="project-card"
                        style="background-image: url('{{ asset('/images/projects/flixxmovie.jpg') }}');">
                        <div class="project-name">JS</div>
                        {{-- Anchor --}}
                        <a href="https://flixxmovie.netlify.app/" target="_blank" rel="noopener noreferrer">
                            <div class="overlay">
                                <div class="text-2xl">FlixxMovie</div>
                            </div>
                        </a>
                    </div>

                    {{-- Bottom Content --}}
                    <div class="project-content mt-4 flex justify-between items-center">
                        <div class="github-link">
                            <a href="https://github.com/tommasovenza/flixx-app" target="_blank"
                                rel="noopener noreferrer">
                                <img src="{{ asset('/images/tech-logos/github.svg') }}" alt="github logo"
                                    style="height: 40px">
                            </a>
                        </div>

                        <div class="project-link">
                            <a href="https://flixxmovie.netlify.app/" target="_blank"
                                rel="noopener noreferrer">FlixxMovie</a>
                        </div>
                    </div>
                </div>

                {{-- Second Project --}}
                <div class="project">
                    <div class="project-card"
                        style="background-image: url('{{ asset('/images/projects/workopia.jpg') }}');">
                        <div class="project-name">PHP</div>
                        <a href="https://www.workopia.it/" target="_blank" rel="noopener noreferrer">
                            <div class="overlay">
                                <div class="text-2xl">Workopia</div>
                            </div>
                        </a>
                    </div>

                    {{-- Bottom Content --}}
                    <div class="project-content mt-4 flex justify-between items-center">
                        <div class="github-link">
                            <a href="https://github.com/tommasovenza/workopia-php" target="_blank"
                                rel="noopener noreferrer">
                                <img src="{{ asset('/images/tech-logos/github.svg') }}" alt="github logo"
                                    style="height: 40px">
                            </a>
                        </div>

                        <div class="project-link">
                            <a href="https://www.workopia.it/" target="_blank" rel="noopener noreferrer">Workopia</a>
                        </div>
                    </div>
                </div>
                {{-- Project --}}
                <div class="project">
                    <div class="project-card"
                        style="background-image: url('{{ asset('/images/projects/tracalorie.jpg') }}');">
                        <div class="project-name">JS</div>
                        <a href="https://trackalorie.netlify.app/" target="_blank" rel="noopener noreferrer">
                            <div class="overlay">
                                <div class="text-2xl">Tracalorie</div>
                            </div>
                        </a>
                    </div>

                    {{-- Bottom Content --}}
                    <div class="project-content mt-4 flex justify-between items-center">
                        <div class="github-link">
                            <a href="https://github.com/tommasovenza/calorie-tracker" target="_blank"
                                rel="noopener noreferrer">
                                <img src="{{ asset('/images/tech-logos/github.svg') }}" alt="github logo"
                                    style="height: 40px">
                            </a>
                        </div>

                        <div class="project-link">
                            <a href="https://trackalorie.netlify.app/" target="_blank"
                                rel="noopener noreferrer">Tracalorie</a>
                        </div>
                    </div>
                </div>
                {{-- Project --}}
                <div class="project">
                    <div class="project-card" style="background-image: url('{{ asset('/images/projects/BTP.jpg') }}');">
                        <div class="project-name">CSS</div>
                        <a href="https://unruffled-liskov-45a932.netlify.app/" target="_blank" rel="noopener noreferrer">
                            <div class="overlay">
                                <div class="text-2xl">Best Tour Plan</div>
                            </div>
                        </a>
                    </div>

                    {{-- Bottom Content --}}
                    <div class="project-content mt-4 flex justify-between items-center">
                        <div class="github-link">
                            <a href="https://github.com/tommasovenza/landing-hotel-booking" target="_blank"
                                rel="noopener noreferrer">
                                <img src="{{ asset('/images/tech-logos/github.svg') }}" alt="github logo"
                                    style="height: 40px">
                            </a>
                        </div>

                        <div class="project-link">
                            <a href="https://unruffled-liskov-45a932.netlify.app/" target="_blank"
                                rel="noopener noreferrer">Best Tour Plan</a>
                        </div>
                    </div>
                </div>
                {{-- Project --}}
                <div class="project">
                    <div class="project-card"
                        style="background-image: url('{{ asset('/images/projects/hangman.jpg') }}');">
                        <div class="project-name">JS</div>
                        <a href="https://appeso.netlify.app/" target="_blank" rel="noopener noreferrer">
                            <div class="overlay">
                                <div class="text-2xl">Hangman</div>
                            </div>
                        </a>
                    </div>

                    {{-- Bottom Content --}}
                    <div class="project-content mt-4 flex justify-between items-center">
                        <div class="github-link">
                            <a href="https://github.com/tommasovenza/hangman-game" target="_blank"
                                rel="noopener noreferrer">
                                <img src="{{ asset('/images/tech-logos/github.svg') }}" alt="github logo"
                                    style="height: 40px">
                            </a>
                        </div>

                        <div class="project-link">
                            <a href="https://appeso.netlify.app/" target="_blank" rel="noopener noreferrer">Hangman</a>
                        </div>
                    </div>
                </div>
                {{-- Project --}}
                <div class="project">
                    <div class="project-card"
                        style="background-image: url('{{ asset('/images/projects/viewer.jpg') }}');">
                        <div class="project-name">JS</div>
                        <a href="https://siena-imaging-frontend.netlify.app/" target="_blank" rel="noopener noreferrer">
                            <div class="overlay">
                                <div class="text-2xl">Viewer</div>
                            </div>
                        </a>
                    </div>

                    {{-- Bottom Content --}}
                    <div class="project-content mt-4 flex justify-between items-center">
                        <div class="github-link">
                            <a href="https://github.com/tommasovenza/SI-frontend-dev-pos" target="_blank"
                                rel="noopener noreferrer">
                                <img src="{{ asset('/images/tech-logos/github.svg') }}" alt="github logo"
                                    style="height: 40px">
                            </a>
                        </div>

                        <div class="project-link">
                            <a href="https://siena-imaging-frontend.netlify.app/" target="_blank"
                                rel="noopener noreferrer">Viewer</a>
                        </div>
                    </div>
                </div>
                {{-- Project --}}
                <div class="project">
                    <div class="project-card" style="background-image: url('{{ asset('/images/projects/CRL.jpg') }}');">
                        <div class="project-name">CSS</div>
                        <a href="https://final-challenge-crl.netlify.app/" target="_blank" rel="noopener noreferrer">
                            <div class="overlay">
                                <div class="text-2xl">Conquering Responsive Layout</div>
                            </div>
                        </a>
                    </div>

                    {{-- Bottom Content --}}
                    <div class="project-content mt-4 flex justify-between items-center">
                        <div class="github-link">
                            <a href="https://github.com/tommasovenza/final-challenge-CRL" target="_blank"
                                rel="noopener noreferrer">
                                <img src="{{ asset('/images/tech-logos/github.svg') }}" alt="github logo"
                                    style="height: 40px">
                            </a>
                        </div>

                        <div class="project-link">
                            <a href="https://final-challenge-crl.netlify.app/" target="_blank"
                                rel="noopener noreferrer">Responsive Layout</a>
                        </div>
                    </div>
                </div>
                {{-- Project --}}
                <div class="project">
                    <div class="project-card"
                        style="background-image: url('{{ asset('/images/projects/qr-maker.jpg') }}');">
                        <div class="project-name">JS</div>
                        <a href="https://qr-maker-gen.netlify.app/" target="_blank" rel="noopener noreferrer">
                            <div class="overlay">
                                <div class="text-2xl">QR Maker</div>
                            </div>
                        </a>
                    </div>

                    {{-- Bottom Content --}}
                    <div class="project-content mt-4 flex justify-between items-center">
                        <div class="github-link">
                            <a href="https://github.com/tommasovenza/qrcode-generator" target="_blank"
                                rel="noopener noreferrer">
                                <img src="{{ asset('/images/tech-logos/github.svg') }}" alt="github logo"
                                    style="height: 40px">
                            </a>
                        </div>

                        <div class="project-link">
                            <a href="https://qr-maker-gen.netlify.app/" target="_blank" rel="noopener noreferrer">QR
                                Maker</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
