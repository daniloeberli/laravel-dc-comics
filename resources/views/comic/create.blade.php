@extends('layout.app')

@section('page.title')
    Inserisci un nuovo fumetto
@endsection

@section('page.main')
    <div class="container">
        <a href="{{ route('comics.index') }}">Go back</a>
    </div>

    <div class="container">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="thumb">immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="form-group">
                <label for="price">prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="series">serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="form-group">
                <label for="sale_date">data</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="form-group">
                <label for="type">tipologia</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
