@extends('layouts.app')

@section('content')

    <div class="container">
        <div>
            <h1>Dodaj lekciju</h1>
        </div>

        <div>
            <form method="POST" action="/lectures">
                @csrf
                <div class="form-group">
                    <label for="name">Naziv</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="topic">Tema</label>
                    <select class="form-control" id="topic" name="topic">
                        <option>Programiranje</option>
                        <option>Matematika</option>
                        <option>Fizika</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Tekst</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                </div>
                <div>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                </div>
                <button type="submit" class="btn btn-primary">Dodaj</button>
            </form>
        </div>

        <a href="/lectures">Back to all lectures</a>
    </div>


@endsection
