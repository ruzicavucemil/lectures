@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h4 class="text-center">{{ session('mssg') }}</h4>
        </div>

        <div class="row d-flex justify-content-between mx-0">
            <h1>Lekcije</h1>

            @if (Auth::check())
                <div>
                    <a href="/lectures/create" class="btn btn-info text-white">Dodaj lekciju</a>
                </div>
            @endif
        </div>

        <form method="GET">
            <div class="form-group">
                <select class="form-control" name="topic" id="topic">
                    <option selected disabled>Odaberi temu</option>
                    <option>Programiranje</option>
                    <option>Matematika</option>
                    <option>Fizika</option>
                </select>
                <div class="m-2 text-center">
                    <a class="btn btn-secondary text-white m-2" href="/lectures">Sve teme</a>
                    <input class="btn btn-info text-white m-2" type="submit" value="Traži">
                </div>
            </div>
        </form>

        <div class="row">
            @foreach ($lectures as $lecture)
                <div class="col-lg-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="img/fpmoz_logo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Naziv: {{ $lecture->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Tema: {{ $lecture->topic }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Napisao/la: {{ $lecture->user->email }}</h6>
                            <div class="text-right">
                                <a href="/lectures/{{ $lecture->id }}" class="card-link text-info">Prikaži više</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
