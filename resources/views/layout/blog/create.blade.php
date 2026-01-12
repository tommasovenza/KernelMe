@extends('layout.app')

@section('page_title')
    Create Blog Post
@endsection

@section('content')
    <div class="container pb-10 new-blog-post">
        <div class="heading-new-blog-post pb-4">
            <h1 class="text-3xl">Create a new Blog Post</h1>
        </div>

        <div class="new-blog-post-form-wrapper">
            <form action="{{ route('post.store') }}" method="POST" class="form-new-post" enctype="multipart/form-data">
                @csrf
                <div class="form-control">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}">
                    @error('title')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="subtitle">Subtitle</label>
                    <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle') }}">
                    @error('subtitle')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
                    @error('content')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="excerpt">Excerpt</label>
                    <textarea name="excerpt" id="excerpt" cols="30" rows="10">{{ old('excerpt') }}</textarea>
                    @error('excerpt')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="tags">Tags</label>
                    <input type="text" name="tags" id="tags" value="{{ old('tags') }}">
                    @error('tags')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="read_time">Read Time</label>
                    <input type="text" name="read_time" id="read_time" value="{{ old('read_time') }}">
                    @error('read_time')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="featured_image">Read Time</label>
                    <input type="file" name="featured_image" id="featured_image" value="{{ old('featured_image') }}">
                    @error('featured_image')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="rounded-md bg-blue-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 disabled:bg-blue-200 disabled:text-gray-600 cursor-pointer mt-4">
                    Create New
                </button>
            </form>
        </div>
    </div>
@endsection
