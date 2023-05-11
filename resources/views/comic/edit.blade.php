@extends('layout.app')

@section('page.title')
    <div class="container">
        Modifica il fumetto: {{$comic->title}}
    </div>
@endsection

@section('page.main')
    <div class="container">
        <a href="{{ route('comics.index') }}">Go back</a>
    </div>

    <div class="container">
        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">titolo</label>
                <input type="text" value="{{$comic->title}}" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ strip_tags( $comic->description ) }}</textarea>
            </div>
            <div class="form-group">
                <label for="thumb">immagine</label>
                <input type="text" value="{{$comic->thumb}}" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="form-group">
                <label for="price">prezzo</label>
                <input type="text" value="{{$comic->price}}" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="series">serie</label>
                <input type="text" value="{{$comic->series}}" class="form-control" id="series" name="series">
            </div>
            <div class="form-group">
                <label for="sale_date">data</label>
                <input type="date" value="{{$comic->sale_date}}" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="form-group">
                <label for="type">tipologia</label>
                <input type="text" value="{{$comic->type}}" class="form-control" id="type" name="type">
            </div>
            <div class="form-group">
                <label for="artists"></label>
                <textarea class="form-control" id="artists" name="artists" rows="3">{{ strip_tags( $comic->artists ) }}</textarea>
            </div>
            <div class="form-group">
                <label for="writers"></label>
                <textarea class="form-control" id="writers" name="writers" rows="3">{{ strip_tags( $comic->writers ) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="container">
        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
            @csrf
            {{-- aggiungiamo il metodo --}}
            @method('DELETE')
            <input type="submit" value="Cancella" class="btn btn-danger btn-sm">
        </form>
    </div>
@endsection
