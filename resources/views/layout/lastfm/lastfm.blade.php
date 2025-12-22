@extends('layout.app')

@section('page_title')
    Last FM View
@endsection

@section('content')
    <div class="container pb-10">
        <h1 class="text-3xl">Recent Last FM Tracks</h1>
        <button id="last-fm" class="rounded-md bg-blue-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 disabled:bg-blue-200 disabled:text-gray-600 cursor-pointer mt-4">
            Get Last FM Data
        </button>
        <div class="showTracks" id="showTracks"></div>
   </div>
@endsection
