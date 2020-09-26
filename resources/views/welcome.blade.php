@extends('layouts.app')

@section('content')
    {{-- <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
        @endif
    </div>
    @endif --}}

    <div class="container">
        <h1 class="text-center">Aplikacija za izradu online lekcija</h1>
        <div class="row d-flex justify-content-center">
           <div>
                <img src="img/fpmoz_logo.png" alt="">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <!-- <div>
                <a class="text-info" href="/lectures">Pregled svih lekcija</a>
            </div> -->
        </div>
    </div>
@endsection
