@extends('layouts.app')

@section('content')

    <div class="container">
        <div>
            <h2>Naziv: {{ $lecture->name }}</h2>
            <h5>Tema: {{ $lecture->topic }}</h5>
            <hr>

            <pre>{{ $lecture->description }}</pre>
        </div>

        <div class="row d-flex justify-content-between m-0">
            <a href="/lectures" class="text-info">Pregled svih lekcija</a>

            @if (Auth::check())
                <div>
                    <form action="/lectures/{{ $lecture->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Obriši</button>
                    </form>
                </div>
            @endif
        </div>
    </div>


@endsection
