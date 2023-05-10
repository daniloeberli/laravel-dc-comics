@extends('layout.app')

@section('page.title')
    elenco
@endsection

@section('page.main')
<ul>
    @foreach ($comics as $comic)
        <li>{{$comic->title}}</li>
    @endforeach
</ul>
    
@endsection