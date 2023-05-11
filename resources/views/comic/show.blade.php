@extends('layout.app')

@section('page.title')
    {{$comic->title}}
@endsection

@section('page.main')
    <div class="container">
        <ul>
            <li>{{$comic->description}}</li>
            <li>{{$comic->writers}}</li>
            <li>{{$comic->artists}}</li>
        </ul>
    </div>
    <div class="container">
        <a href="{{route('comics.index')}}">Go back</a>
    </div>
@endsection