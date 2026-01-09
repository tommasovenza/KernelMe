@extends('layout.app')

@section('title', 'Page not found | Tommaso Venza')
@section('meta_description', 'The page you were looking for could not be found on this site.')
@section('canonical', url()->current())

@section('content')
    <div class="min-h-[60vh] flex flex-col items-center justify-center text-center px-6">
        <h1 class="text-4xl font-semibold mb-4">404</h1>

        <p class="text-lg text-gray-300 mb-2">
            Page not found
        </p>

        <p class="text-sm text-gray-400 mb-6">
            The page you’re looking for doesn’t exist or has been moved.
        </p>

        <a href="{{ route('home') }}" class="inline-block px-4 py-2 rounded-lg bg-blue-600 text-white">
            Back to home
        </a>
    </div>
@endsection
