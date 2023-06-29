@extends('layout.base')

@section('title', 'Show Info')

@section('main')
    <ul class="list-group list-group-flush" style="margin-bottom: 2em;">
        <li class="list-group-item">Title: {{ $comic->title }}</li>
        <li class="list-group-item"><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></li>
        <li class="list-group-item">Descriction: {!! $comic->description !!}</li>
        <li class="list-group-item">Price: {{ $comic->price }}</li>
        <li class="list-group-item">Series: {{ $comic->series }}</li>
        <li class="list-group-item">Sale date: {{ $comic->sale_date }}</li>
        <li class="list-group-item">Type: {{ $comic->type }}</li>
    </ul>

    <a class="btn btn-secondary" href="/comics">Back</a>
@endsection