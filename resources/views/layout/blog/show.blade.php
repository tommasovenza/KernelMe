@extends('layout.app')

@section('page_title')
    {{ $post->title }}
@endsection

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
                <h1 class="text-5xl font-semibold">{!! $post->title !!}</h1>
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
            <div class="post-info-date-read flex justify-between items-center" style="width: 700px">
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

    <div class="blog-show mt-12">
        <div class="post-content text-lg">{!! $html !!}</div>
    </div>
</div>
@endsection