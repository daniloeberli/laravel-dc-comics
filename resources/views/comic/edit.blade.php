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
        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">titolo</label>
                <input type="text" value="{{old('title',$comic->title)}}" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old( 'description',$comic->description ) }}</textarea>
            </div>
            <div class="form-group">
                <label for="thumb">immagine</label>
                <input type="text" value="{{old('thumb',$comic->thumb)}}" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="form-group">
                <label for="price">prezzo</label>
                <input type="text" value="{{old('price',$comic->price)}}" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="series">serie</label>
                <input type="text" value="{{old('series',$comic->series)}}" class="form-control" id="series" name="series">
            </div>
            <div class="form-group">
                <label for="sale_date">data</label>
                <input type="date" value="{{old('sale_date',$comic->sale_date)}}" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="form-group">
                <label for="type">tipologia</label>
                <input type="text" value="{{old('type',$comic->type)}}" class="form-control" id="type" name="type">
            </div>
            <div class="form-group">
                <label for="artists"></label>
                <textarea class="form-control" id="artists" name="artists" rows="3">{{ old('artists',$comic->artists ) }}</textarea>
            </div>
            <div class="form-group">
                <label for="writers"></label>
                <textarea class="form-control" id="writers" name="writers" rows="3">{{ old('writers',$comic->writers ) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="container">
        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input onclick="return confirm('Sicuro che vuoi cancellare questo fumetto?');" type="submit" value="Cancella" class="btn btn-danger btn-sm">
        </form>
    </div>
@endsection
