@extends('layout.app')

@section('page.title')
    {{$comic->title}}
@endsection

@section('page.main')
    <div class="container">
        {{$comic->description}}
    </div>
    <div class="container">
        <a href="{{route('comics.index')}}">Go back</a>
    </div>
@endsection