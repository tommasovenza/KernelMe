@extends('layout.app')

@section('page_title')
    Save New Timesheet
@endsection

@section('content')
    <div class="container pb-10 new-timesheet">
        <div class="save-new-timesheet pb-4">
            <h1 class="text-3xl">Save a new Timesheet</h1>
        </div>

        <div class="new-timesheet-form-wrapper">
            {{-- Summary --}}
            <div class="timesheet-summary">
                <div class="timesheet-summary-controls">
                    {{-- Month --}}
                    <div class="current-month">
                        <p>Giugno 2026</p>
                    </div>
                    {{-- Arrows --}}
                    <div class="arrow-controls">
                        <div class="left">
                            <span>
                                < </span>
                        </div>
                        <div class="right">
                            <span>></span>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 mt-4 gap-4">
                    <div class="time">
                        <div class="time-heading">
                            <span>Oggi</span>
                            <h3>4h 22</h3>
                        </div>
                    </div>
                    <div class="time">
                        <div class="time-heading">
                            <span>Settimana</span>
                            <h3>4h 22</h3>
                        </div>
                    </div>
                    <div class="time">
                        <div class="time-heading">
                            <span>Mese</span>
                            <h3>4h 22</h3>
                        </div>
                    </div>
                    <div class="time">
                        <div class="time-heading">
                            <span>Saldo</span>
                            <h3 class="text-rose-800">-3h 28</h3>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <form action="" method="POST" class="form-new-timesheet">
                @csrf
                <div class="form-control">
                    <label for="title">Title</label>
                    <input type="text" name="" id="" value="{{ old('') }}">
                    @error('')
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

                <button type="submit"
                    class="rounded-md bg-blue-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 disabled:bg-blue-200 disabled:text-gray-600 cursor-pointer mt-4">
                    Save Time
                </button>
            </form> --}}
        </div>
    </div>
@endsection
