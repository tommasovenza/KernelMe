@extends('layout.app')

@section('title', 'Blog | Laravel, PHP, JS - Web development')

@section('meta_description',
    'Notes, small write-ups and experiments about Laravel, PHP, JavaScript and the projects I
    work on.')

@section('canonical', route('blog'))

@section('content')
    <div class="container pb-10 blog">

        <div class="blog-index-heading flex justify-between items-center">
            <div class="blog-index-title">
                <h1 class="text-3xl">Blog Page</h1>
            </div>

            @auth
                <div class="blog-add-new">
                    <a href="{{ route('post.create') }}"
                        class="rounded-md bg-blue-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 disabled:bg-blue-200 disabled:text-gray-600 cursor-pointer mt-4">Add
                        new</a>
                </div>
            @endauth
        </div>

        <div class="blog-container mt-8">
            @forelse ($posts as $post)
                <div class="post">
                    <ul class="mt-4 mb-4 post-list">
                        <li class="title text-3xl font-bold mb-4"><a
                                href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a></li>
                        <li class="excerpt">{{ $post->excerpt }}</li>
                    </ul>

                    <div class="flex flex-col gap-4 mt-4">
                        <div class="info-read">
                            <strong><i class="fa-solid fa-clock"></i></strong> <span>{{ $post->read_time }} read</span>
                        </div>
                        <div class="info flex justify-between items-center gap-4">
                            <div class="date">
                                <span>{{ date('M d, Y', strtotime($post->date)) }}</span>
                            </div>
                            <div class="tags">
                                <span>{{ $post->tags }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="post">
                    <ul class="mt-4 mb-4 post-list">
                        <li>Sorry there are no posts found!</li>
                    </ul>
                </div>
            @endforelse
        </div>
    </div>
@endsection
