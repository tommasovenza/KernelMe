@extends('layout.app')

@section('page_title')
    Music
@endsection

@section('content')
<section class="music pb-10">
        <div class="container">
            <div class="heading-projects p-4">
                <h2 class="text-center text-2xl text-blue-500 font-semibold">Music</h2>
            </div>

            <div class="music-grid-container">
                <div class="music-card">
                    <img src="{{ asset('/images/projects/workopia.jpg') }}" alt="test">
                </div>

                <div class="music-card">
                    <img src="{{ asset('/images/projects/hangman.jpg') }}" alt="test">
                </div>

                <div class="music-card">
                    <img src="{{ asset('/images/projects/qr-maker.jpg') }}" alt="test">
                </div>

                <div class="music-card">
                    <img src="{{ asset('/images/projects/workopia.jpg') }}" alt="test">
                </div>

                <div class="music-card">
                    <img src="{{ asset('/images/projects/workopia.jpg') }}" alt="test">
                </div>
            </div>
        </div>
    </section>
@endsection
