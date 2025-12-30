@extends('layout.app')

@section('page_title')
    Recent Listening
@endsection

@section('content')
    <div class="container pb-10">
        <h1 class="text-3xl">Recent Listening</h1>
        <div class="controls-container">
            <div class="song-controls">
            {{-- Recent Tracks --}}
            <button id="recent-tracks" class="rounded-md bg-blue-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 disabled:bg-blue-200 disabled:text-gray-600 cursor-pointer mt-4">
            Recent Tracks
            </button>
            {{-- Top Artist --}}
            <button id="top-artist" class="rounded-md bg-blue-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 disabled:bg-blue-200 disabled:text-gray-600 cursor-pointer mt-4">
            Top Artist
            </button>
            {{-- Top Album --}}
            <button id="top-album" class="rounded-md bg-blue-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 disabled:bg-blue-200 disabled:text-gray-600 cursor-pointer mt-4">
            Top Album
            </button>
            {{-- Last 7 Days --}}
            <button id="last-7-days" class="rounded-md bg-blue-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 disabled:bg-blue-200 disabled:text-gray-600 cursor-pointer mt-4">
            Last 7 Days
            </button>
            {{-- Last 30 Days --}}
            <button id="last-30-days" class="rounded-md bg-blue-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 disabled:bg-blue-200 disabled:text-gray-600 cursor-pointer mt-4">
            Last 30 Days
            </button>
        </div>
        </div>
        <div class="showTracks" id="showTracks"></div>
   </div>
@endsection
