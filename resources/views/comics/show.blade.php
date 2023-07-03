@extends('layout.base')

@section('title', 'Show Info')

@section('main')

    <div class="show">

        <div class="thumb">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>

        <div class="info">
            <ul class="list-group" style="margin-bottom: 2em;">
                <li class="list-group-item"> <span>Title:</span> {{ $comic->title }}</li>
                <li class="list-group-item"><span>Descriction:</span> {!! $comic->description !!}</li>
                <li class="list-group-item"><span>Price:</span> {{ '$' . ($comic->price / 100) }}</li>
                <li class="list-group-item"><span>Series:</span> {{ $comic->series }}</li>
                <li class="list-group-item"><span>Sale date:</span> {{ $comic->sale_date }}</li>
                <li class="list-group-item"><span>Type:</span> {{ $comic->type }}</li>
            </ul>

            <a class="btn btn-secondary" href="/comics">Back</a>
        </div>

    </div>
    
@endsection