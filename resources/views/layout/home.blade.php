@extends('layout.app')

@section('content')
    <div class="container pt-10 pb-10">
        <div class="home-heading">
            <h1 class="text-3xl font-semibold mb-4">Hey there 👋, I'm <span class="name">Tommaso Venza</span></h1>
            <p>A Full Stack Web Developer based in the Italy with a passion for Laravel, CSS, Javascript.</p>
        </div>
    </div>

    <section class="projects pb-10">
        <div class="container">
            <div class="heading-projects p-4">
                <h2 class="text-center text-2xl text-blue-500 font-semibold">Projects</h2>
            </div>
            <div class="projects-container">
                <div class="project-card" style="background-image: url('{{ asset('/images/projects/flixxmovie.jpg')}}');">
                    <div class="project-name">JS</div>
                    {{-- Anchor --}}
                    <a href="https://flixxmovie.netlify.app/">
                        <div class="overlay">
                            <div class="text-2xl">FlixxMovie</div>
                        </div>
                    </a>
                </div>

                <div class="project-card" style="background-image: url('{{ asset('/images/projects/workopia.jpg')}}');">
                    <div class="project-name">PHP</div>
                    <a href="https://www.workopia.it/">
                        <div class="overlay">
                            <div class="text-2xl">Workopia</div>
                        </div>
                    </a>
                </div>

                <div class="project-card" style="background-image: url('{{ asset('/images/projects/tracalorie.jpg')}}');">
                    <div class="project-name">JS</div>
                    <a href="https://trackalorie.netlify.app/">
                        <div class="overlay">
                            <div class="text-2xl">Tracalorie</div>
                        </div>
                    </a>
                </div>

                <div class="project-card" style="background-image: url('{{ asset('/images/projects/BTP.jpg')}}');">
                    <div class="project-name">CSS</div>
                    <a href="https://unruffled-liskov-45a932.netlify.app/">
                        <div class="overlay">
                            <div class="text-2xl">Best Tour Plan</div>
                        </div>
                    </a>
                </div>

                <div class="project-card" style="background-image: url('{{ asset('/images/projects/hangman.jpg')}}');">
                    <div class="project-name">JS</div>
                    <a href="https://appeso.netlify.app/">
                        <div class="overlay">
                            <div class="text-2xl">Hangman</div>
                        </div>
                    </a>
                </div>

                <div class="project-card" style="background-image: url('{{ asset('/images/projects/viewer.jpg')}}');">
                    <div class="project-name">JS</div>
                    <a href="https://siena-imaging-frontend.netlify.app/">
                        <div class="overlay">
                            <div class="text-2xl">Viewer</div>
                        </div>
                    </a>
                </div>

                <div class="project-card" style="background-image: url('{{ asset('/images/projects/CRL.jpg')}}');">
                    <div class="project-name">CSS</div>
                    <a href="https://final-challenge-crl.netlify.app/">
                        <div class="overlay">
                            <div class="text-2xl">Conquering Responsive Layout</div>
                        </div>
                    </a>
                </div>

                <div class="project-card" style="background-image: url('{{ asset('/images/projects/qr-maker.jpg')}}');">
                    <div class="project-name">JS</div>
                    <a href="https://qr-maker-gen.netlify.app/">
                        <div class="overlay">
                            <div class="text-2xl">QR Maker</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection