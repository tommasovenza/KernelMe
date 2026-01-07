@extends('layout.app')

@section('page_title')
    Contacts
@endsection

@section('content')
    <div class="contacts-content pt-10">
        <div class="container contacts flex gap-10">
            <div class="left">
                <div class="heading">
                    <h1 class="text-4xl font-semibold">Get in touch</h1>
                    <p class="mt-6 text-md text-white-600">If you have any inquiries, questions, or simply want to say hello, feel free to contact me through one of my socials below or the contact form</p>
                </div>
                {{-- Social --}}
                <div class="social-links">
                    <ul class="social-menu">
                        <li>
                            <a href="https://github.com/tommasovenza">
                                <i class="fa-brands fa-github"></i> Github: @tommasovenza
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/tommasovenza/">
                                <i class="fa-brands fa-linkedin-in"></i> Linkedin
                            </a>
                        </li>
                        <li>
                            <a href="https://x.com/tomminoDev">
                                <i class="fa-brands fa-x-twitter"></i> X (formerly Twitter): @tommasovenza
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/tommibommi">
                                <i class="fa-brands fa-facebook-f"></i> Facebook
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/tommasovenza/">
                                <i class="fa-brands fa-instagram"></i> Instagram
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="right">
                <div class="form-container">
                    <form action="{{ route('contact-form') }}" method="POST">
                        @csrf
                        <div class="flex gap-4">
                            {{-- First Name Label --}}
                            <div class="form-control first-name flex flex-col w-full">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" id="first_name" placeholder="Ken">
                                @error('first_name')
                                    <div class="text-red-500 font-semibold">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- Last Name Label --}}
                            <div class="form-control last-name flex flex-col w-full">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" id="last_name" placeholder="Master">
                                @error('last_name')
                                    <div class="text-red-500 font-semibold">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Last Name Label --}}
                        <div class="form-control email">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="kenmaster@email.com">
                            @error('email')
                                <div class="text-red-500 font-semibold">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Last Name Label --}}
                        <div class="form-control text-area flex flex-col">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="10" rows="10" placeholder="Hello there..."></textarea>
                            @error('message')
                                <div class="text-red-500 font-semibold">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-xs text-gray-600">
                            The data entered will be used exclusively to respond to your message, in accordance with
                            <a href="{{ route('privacy') }}" class="underline">
                                Privacy Policy
                            </a>.
                        </div>

                        {{-- checkbox taken vision --}}
                        <div class="flex items-center gap-2 mt-2">
                            <input
                                id="privacy"
                                name="privacy"
                                type="checkbox"
                                value="1"
                                class="mt-1"
                                required
                            >
                            <label for="privacy" class="text-sm">
                                I declare that I have read the
                                <a href="{{ route('privacy') }}" class="underline">Privacy Policy</a>.
                            </label>
                            @error('privacy')
                                <div class="text-red-500 font-semibold">{{ $message }}</div>
                            @enderror
                        </div>


                        <button type="submit" class="rounded-md bg-blue-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 disabled:bg-blue-200 disabled:text-gray-600 cursor-pointer">
                            Let's Talk
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection