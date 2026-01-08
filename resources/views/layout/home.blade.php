@extends('layout.app')

@section('page_title')
Home
@endsection

@section('content')
<div class="container pt-10 pb-10">
    <div class="home-heading">
        <h1 class="text-3xl font-semibold mb-4">Hey there 👋, I'm <span class="name">Tommaso Venza</span></h1>
        <p class="text-lg hero-subtitle">Web developer focused on Laravel & web applications.</p>
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

<section class="about" id="about">
    <div class="container text-lg pb-4">
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
</section>

<section class="what-i-do" id="what-i-do">
    <div class="container text-lg pt-4 pb-4">
        <h2>What I work on</h2>

        <ul>
            <li>Web applications and internal tools built with Laravel.</li>
            <li>Content-driven websites with custom backends.</li>
            <li>API integrations and small dashboards.</li>
            <li>Maintenance and refactoring of existing PHP/Laravel projects.</li>
        </ul>
    </div>
</section>

<section class="projects pb-10">
    <div class="container">
        <div class="heading-projects p-4">
            <h2 class="text-center text-2xl text-blue-500 font-semibold">Projects</h2>
        </div>
        <div class="projects-container">
            <div class="project-card" style="background-image: url('{{ asset('/images/projects/flixxmovie.jpg')}}');">
                <div class="project-name">JS</div>
                {{-- Anchor --}}
                <a href="https://flixxmovie.netlify.app/" target="_blank" rel="noopener noreferrer">
                    <div class="overlay">
                        <div class="text-2xl">FlixxMovie</div>
                    </div>
                </a>
            </div>

            <div class="project-card" style="background-image: url('{{ asset('/images/projects/workopia.jpg')}}');">
                <div class="project-name">PHP</div>
                <a href="https://www.workopia.it/" target="_blank" rel="noopener noreferrer">
                    <div class="overlay">
                        <div class="text-2xl">Workopia</div>
                    </div>
                </a>
            </div>

            <div class="project-card" style="background-image: url('{{ asset('/images/projects/tracalorie.jpg')}}');">
                <div class="project-name">JS</div>
                <a href="https://trackalorie.netlify.app/" target="_blank" rel="noopener noreferrer">
                    <div class="overlay">
                        <div class="text-2xl">Tracalorie</div>
                    </div>
                </a>
            </div>

            <div class="project-card" style="background-image: url('{{ asset('/images/projects/BTP.jpg')}}');">
                <div class="project-name">CSS</div>
                <a href="https://unruffled-liskov-45a932.netlify.app/" target="_blank" rel="noopener noreferrer">
                    <div class="overlay">
                        <div class="text-2xl">Best Tour Plan</div>
                    </div>
                </a>
            </div>

            <div class="project-card" style="background-image: url('{{ asset('/images/projects/hangman.jpg')}}');">
                <div class="project-name">JS</div>
                <a href="https://appeso.netlify.app/" target="_blank" rel="noopener noreferrer">
                    <div class="overlay">
                        <div class="text-2xl">Hangman</div>
                    </div>
                </a>
            </div>

            <div class="project-card" style="background-image: url('{{ asset('/images/projects/viewer.jpg')}}');">
                <div class="project-name">JS</div>
                <a href="https://siena-imaging-frontend.netlify.app/" target="_blank" rel="noopener noreferrer">
                    <div class="overlay">
                        <div class="text-2xl">Viewer</div>
                    </div>
                </a>
            </div>

            <div class="project-card" style="background-image: url('{{ asset('/images/projects/CRL.jpg')}}');">
                <div class="project-name">CSS</div>
                <a href="https://final-challenge-crl.netlify.app/" target="_blank" rel="noopener noreferrer">
                    <div class="overlay">
                        <div class="text-2xl">Conquering Responsive Layout</div>
                    </div>
                </a>
            </div>

            <div class="project-card" style="background-image: url('{{ asset('/images/projects/qr-maker.jpg')}}');">
                <div class="project-name">JS</div>
                <a href="https://qr-maker-gen.netlify.app/" target="_blank" rel="noopener noreferrer">
                    <div class="overlay">
                        <div class="text-2xl">QR Maker</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection