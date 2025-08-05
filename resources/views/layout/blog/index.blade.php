@extends('layout.app')

@section('page_title')
    Blog
@endsection

@section('content')
   <div class="container pb-10">
        <h1 class="text-3xl">Blog Page</h1>
        @foreach ($posts as $post)
            <ul class="mt-4 mb-4">
                <li>{{ $post->id }}</li>
                <li><a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a></li>
                <li>{{ $post->subtitle }}</li>
                <li>{{ $post->slug }}</li>
                <li>{{ $post->content }}</li>
                <li>{{ $post->excerpt }}</li>
                <li>{{ $post->date }}</li>
                <li>{{ $post->tags }}</li>
                <li>{{ $post->read_time }}</li>
            </ul>
        @endforeach
   </div>
@endsection