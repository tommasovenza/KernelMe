@extends('layout.app')

@section('title', 'Music & Life | Photos, guitars and live moments')

@section('meta_description', "A small selection of photos around music: guitars, rehearsals, live moments and places.
    It's the personal side that sits next to my work as a web developer.")

@section('canonical', route('music'))

@section('content')
    <section class="music pb-10">
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Some text in the Modal..</p>
            </div>
        </div>
        <div class="container">
            <div class="heading-projects p-4">
                <h2 class="text-center text-2xl text-blue-500 font-semibold">Music</h2>
            </div>

            <div class="music-grid-container">
                <div class="music-card">
                    <img src="{{ asset('/images/music/les-paul.jpg') }}" alt="Gibson Les Paul" class="instrument"
                        loading="lazy">
                </div>

                <div class="music-card">
                    <img src="{{ asset('/images/music/stratocaster.jpg') }}" alt="Stratocaster" class="instrument"
                        loading="lazy">
                </div>

                <div class="music-card">
                    <img src="{{ asset('/images/music/guitars.jpg') }}" alt="Telecaster & Stratocaster" class="instrument"
                        loading="lazy">
                </div>

                <div class="music-card">
                    <img src="{{ asset('/images/music/live.webp') }}" alt="Music Live" class="instrument" loading="lazy">
                </div>

                <div class="music-card">
                    <img src="{{ asset('/images/music/malmantile.webp') }}" alt="Vespa @ Malmantile" class="instrument"
                        loading="lazy">
                </div>

                <div class="music-card">
                    <img src="{{ asset('/images/music/rockin.webp') }}" alt="Rockin Live" class="instrument" loading="lazy">
                </div>

                <div class="music-card">
                    <img src="{{ asset('/images/music/sala.webp') }}" alt="Into The Studio" class="instrument"
                        loading="lazy">
                </div>
            </div>
        </div>
    </section>
@endsection
