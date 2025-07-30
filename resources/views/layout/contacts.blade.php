@extends('layout.app')

@section('page_title')
    Contacts
@endsection

@section('content')
    <div class="contacts-content pt-10">
        <div class="container contacts flex">
            <div class="left">
                <div class="heading">
                    <h1 class="text-3xl font-semibold">Get in touch</h1>
                    <p class="mt-6 text-md text-white-600">If you have any inquiries, questions, or simply want to say hello, feel free to contact me through one of my socials below or the contact form</p>
                </div>
            </div>

            <div class="right">
                <div class="form-container">
                    <form action="">
                        <div class="flex gap-4">
                            {{-- First Name Label --}}
                            <div class="form-control first-name">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" id="first_name">
                            </div>
                            {{-- Last Name Label --}}
                            <div class="form-control last-name">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" id="last_name">
                            </div>
                        </div>

                        {{-- Last Name Label --}}
                        <div class="form-control email">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                        </div>

                        {{-- Last Name Label --}}
                        <div class="form-control text-area">
                            <label for="text_area">Message</label>
                            <input type="text_area" name="text_area" id="text_area">
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