@extends('layout.app')

@php
    $rawText = strip_tags($post->excerpt ?? $post->content);
    $metaDescription = \Illuminate\Support\Str::limit($rawText, 150);
    $ogDescription = \Illuminate\Support\Str::limit($rawText, 200);
@endphp

@section('title', $post->title . ' | Blog | Tommaso Venza')
@section('meta_description', $metaDescription)
@section('og_title', $post->title . ' | Tommaso Venza')
@section('og_description', $ogDescription)
@section('og_url', route('post.show', $post))
@section('canonical', route('post.show', $post))

@section('content')
    <div class="container pb-10 blog-show">
        {{-- Heading --}}
        <div class="post-heading">
            {{-- Heading Content --}}
            <div class="post-heading-content flex flex-col justify-center items-center gap-8">
                {{-- Back Link --}}
                <div class="nav-back">
                    <a href="{{ route('blog') }}" class="mb-4 block">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i> Go Back
                    </a>
                </div>
                {{-- Title --}}
                <div class="post-title">
                    <h1 class="text-2xl md:text-3xl lg:text-5xl font-semibold">{!! $post->title !!}</h1>
                </div>
                {{-- Post Image and Author --}}
                <div class="post-info flex gap-4 items-center">
                    <div class="post-info-image">
                        <img src="{{ asset('./images/blog/author.webp') }}" alt="author">
                    </div>
                    <div class="author">
                        Tommaso Venza
                    </div>
                </div>
                {{-- Post Date Info and Read --}}
                <div class="post-info-date-read">
                    <div class="post-info-read">
                        <strong><i class="fa-solid fa-clock"></i></strong> <span>{{ $post->read_time }} read</span>
                    </div>
                    <div class="post-date-tags">
                        <span>{{ date('M d, Y', strtotime($post->date)) }}</span> - <span>{{ $post->tags }}</span>
                    </div>
                </div>
            </div>
        </div>

        @php
            $html = stripcslashes($post->content);
        @endphp

        {{-- Blog Show Content --}}
        <div class="blog-show mt-12">
            <div class="post-content text-lg">
                <div class="container">
                    @if ($post->featured_image)
                        <img class="featured-image" src="{{ asset('storage/' . $post->featured_image) }}"
                            alt="{{ $post->title }}" class="mb-4 rounded-lg" loading="lazy">
                    @endif
                    {!! $html !!}
                </div>
            </div>
        </div>

        {{-- All other posts Link --}}
        <div class="blog-show pt-24 other-posts">
            <div class="other-posts-content text-lg">
                <h3 class="text-3xl mb-8">Other Posts You May Like</h3>
                <div class="other-post-list">
                    @foreach ($all_other_posts as $post)
                        <div class="card-post">
                            <a href="{{ route('post.show', $post->slug) }}">
                                @if ($post->featured_image !== null)
                                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}">
                                @endif
                            </a>
                            <div class="post-title">
                                <h3 class="text-2xl mt-4 mb-8 font-bold">
                                    <a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a>
                                </h3>
                                <div class="post-info-wrapper flex justify-between items-center">
                                    <h5>{{ date('M d, Y', strtotime($post->date)) }}</h5>
                                    <span><strong><i class="fa-solid fa-clock"></i></strong> {{ $post->read_time }}</span>
                                </div>
                            </div>
                            {{-- list post --}}
                            <ul class="card-list mt-4">
                                <li>{{ $post->excerpt }}</li>
                                <li>{{ $post->tags }}</li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
