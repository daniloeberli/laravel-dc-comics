@extends('layout.app')

@section('page.title')
    <div class="container">
        Comics
    </div>
@endsection

@section('page.main')

<div class="container">
<table class="table">
    <thead>
      <tr>

        <th scope="col">Titolo</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Serie</th>
        <th scope="col">Data</th>
        <th scope="col">Tipologia</th>
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
            {{-- <td>{{ $comic->series }}</td>
            <td>{{ $comic->series }}</td> --}}
          </tr>
    @endforeach
    </tbody>
  </table>
</div>

    
@endsection