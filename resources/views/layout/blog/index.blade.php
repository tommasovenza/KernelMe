@extends('layout.app')

@section('page_title')
    Blog
@endsection

@section('content')
   <div class="container pb-10 blog">
        <h1 class="text-3xl">Blog Page</h1>
        <div class="blog-container mt-8">
            @foreach ($posts as $post)
            <div class="post">
                <ul class="mt-4 mb-4 post-list">
                    <li class="post-id">{{ $post->id }}</li>
                    <li class="title text-3xl font-bold mb-4"><a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a></li>
                    <li class="subtitle">{{ $post->subtitle }}</li>
                    <li class="slug">{{ $post->slug }}</li>
                    {{-- <li>{{ $post->content }}</li> --}}
                    <li class="excerpt">{{ $post->excerpt }}</li>
                    <li class="date">{{ $post->date }}</li>
                    <li class="tags">{{ $post->tags }}</li>
                    <li class="read_time">{{ $post->read_time }}</li>
                </ul>
            </div>
            @endforeach
        </div>
   </div>
@endsection