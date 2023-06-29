@extends('layout.base')

@section('title', 'Create')

@section('main')
    <form class="create-form" method="POST" action="{{ route('comics.store') }}">

        <h1>Add a Comic!</h1>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series">
        </div>

        <div class="mb-3">
            <label for="sale" class="form-label">Sale Date</label>
            <input type="text" class="form-control" id="sale">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type">
        </div>

        <div class="create-button">
            <a class="btn btn-secondary" href="/comics">Back</a>
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection