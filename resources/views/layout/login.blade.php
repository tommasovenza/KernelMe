@extends('layout.app')

@section('page_title')
    Login Page
@endsection

@section('content')
<div class="ext">
    <div class="container login-page">
        <div class="login-header">
            <h1 class="text-3xl">Login Form</h1>
        </div>

        <div class="user-login-wrapper">
            <form action="{{ route('auth-user') }}" method="POST" class="login-form">
                @csrf
                <div class="form-control username">
                    <label for="email">Insert your Username</label>
                    <input type="email" name="email" id="email" placeholder="Insert your Username">
                    @error('email')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-control password">
                    <label for="password">Insert Password</label>
                    <input type="password" name="password" id="password" placeholder="Insert Password">
                    @error('password')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="rounded-md bg-blue-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 disabled:bg-blue-200 disabled:text-gray-600 cursor-pointer">
                    Login
                </button>
            </form>
        </div>
    </div>
</div>
@endsection