@extends('layout.app')

@section('page.title')
    <div class="container">
        Comics
    </div>
@endsection

@section('page.main')
    <div class="container">
        <a href="{{ route('comics.create') }}" class="btn btn-success btn-sm">Inserisci nuovo fumetto</a>
        <div class="row g-3">
            @foreach ($comics as $comic)
                <div class="col-2">
                    <div class="card">
                        <img class="card-img-top" style="max-width: 9rem" src="{{$comic->thumb}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$comic->title}}</h5>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm">Dettagli</a>
                            <a href="{{ route('comics.edit',$comic->id) }}" class="btn btn-primary btn-sm">Modifica fumetto</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
