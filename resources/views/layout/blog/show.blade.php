@extends('layout.app')

@section('page_title')
    {{ $post->title }}
@endsection

@section('content')
   <div class="container pb-10">
        <h1 class="text-3xl">Blog Page</h1>
 
        <ul class="mt-4 mb-4">
            <li><strong>Post ID:</strong> {{ $post->id }}</li>
            <li><strong>Post Title:</strong> {!! $post->title !!}</li>
            <li><strong>Post Subtitle:</strong> {{ $post->subtitle }}</li>
            <li><strong>Post Slug:</strong> {{ $post->slug }}</li>
            <li><strong>Post Content:</strong> {{ $post->content }}</li>
            <li><strong>Post Excerpt:</strong> {{ $post->excerpt }}</li>
            <li><strong>Post Date:</strong> {{ $post->date }}</li>
            <li><strong>Post Tags:</strong> {{ $post->tags }}</li>
            <li><strong>Post Read Time:</strong> {{ $post->read_time }}</li>
        </ul>
   </div>
@endsection