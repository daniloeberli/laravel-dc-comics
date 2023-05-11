@extends('layout.app')

@section('page.title')
    <div class="container">
        Comics
    </div>
@endsection

@section('page.main')
    <div class="container">
        <a href="{{ route('comics.create') }}" class="btn btn-success btn-sm">Inserisci nuovo fumetto</a>
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Action</th>
                    {{-- <th scope="col">Artisti</th>
        <th scope="col">Scrittori</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }} min</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm">Dettagli</a>
                            <a href="{{ route('comics.edit',$comic->id) }}" class="btn btn-primary btn-sm">Modifica fumetto</a>
                        </td>
                        {{-- <td>{{ $comic->series }}</td>
            <td>{{ $comic->series }}</td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
