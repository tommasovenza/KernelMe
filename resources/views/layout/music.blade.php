@extends('layout.app')

@section('page_title')
    Music
@endsection

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
                <img src="{{ asset('/images/music/les-paul.jpg') }}" alt="Gibson Les Paul" class="instrument">
            </div>

            <div class="music-card">
                <img src="{{ asset('/images/music/stratocaster.jpg') }}" alt="stratocaster" class="instrument">
            </div>

            <div class="music-card">
                <img src="{{ asset('/images/music/telecaster.jpg') }}" alt="telecaster" class="instrument">
            </div>
            <div class="music-card">
                <img src="{{ asset('/images/music/telecaster.jpg') }}" alt="telecaster" class="instrument">
            </div>

            <div class="music-card">
                <img src="{{ asset('/images/music/les-paul.jpg') }}" alt="Gibson Les Paul" class="instrument">
            </div>
            
            
            <div class="music-card">
                <img src="{{ asset('/images/music/stratocaster.jpg') }}" alt="stratocaster" class="instrument">
            </div>
        </div>
    </div>
</section>
@endsection
