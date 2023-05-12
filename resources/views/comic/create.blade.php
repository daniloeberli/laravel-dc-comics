@extends('layout.app')

@section('page.title')
    Inserisci un nuovo fumetto
@endsection

@section('page.main')
    <div class="container">
        <a href="{{ route('comics.index') }}">Go back</a>
    </div>

    <div class="container">
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{old('description')}}"</textarea>
            </div>
            <div class="form-group">
                <label for="thumb">immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}">
            </div>
            <div class="form-group">
                <label for="price">prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
            </div>
            <div class="form-group">
                <label for="series">serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{old('series')}}">
            </div>
            <div class="form-group">
                <label for="sale_date">data</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
            </div>
            <div class="form-group">
                <label for="type">tipologia</label>
                <input type="text" class="form-control" id="type" name="type" value="{{old('type')}}">
            </div>
            <div class="form-group">
                <label for="artists">Artisti</label>
                <textarea class="form-control" id="artists" name="artists" rows="3">{{old('artists')}}"</textarea>
            </div>
            <div class="form-group">
                <label for="writers">Scrittori</label>
                <textarea class="form-control" id="writers" name="writers" rows="3">{{old('writers')}}"</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
