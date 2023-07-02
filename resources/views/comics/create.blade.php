@extends('layout.base')

@section('title', 'Create')

@section('main')

    <div class="create">

        <h1>Add a Comic!</h1>

        @if ($errors->any())
            <div class="alert alert-danger m-0">
                <ul class="m-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form class="create-form" method="POST" action="{{ route('comics.store') }}">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description" value="{{ old('description') }}"></textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price in Cent</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
            </div>

            <div class="mb-3">
                <label for="sale" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale" name="sale" value="{{ old('sale') }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('text') }}">
            </div>

            <div class="create-button">
                <a class="btn btn-secondary" href="/comics">Back</a>
                <button type="reset" class="btn btn-warning">Reset</button>
                <button class="btn btn-primary">Submit</button>
            </div>

        </form>

    </div>


@endsection