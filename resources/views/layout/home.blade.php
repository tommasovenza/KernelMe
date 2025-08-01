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
                <div class="project-card">Vue</div>
                <div class="project-card">React</div>
                <div class="project-card">Laravel</div>
                <div class="project-card">Javascript</div>
                <div class="project-card">CSS</div>
                <div class="project-card">Tailwind CSS</div>
                <div class="project-card">Angular</div>
                <div class="project-card">JQuery</div>
                <div class="project-card">PHP</div>
            </div>
        </div>
    </section>
@endsection