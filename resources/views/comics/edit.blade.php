@extends('layout.base')

@section('title', 'Edit Comic')

@section('main')

    <div class="create">

        <h1>Edit the Comic!</h1>
    
        <form class="create-form" method="POST" action="{{ route('comics.update', ['comic' => $comic]) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input 
                    type="text"
                    class="form-control 
                    @error('title') is-invalid @enderror" 
                    id="title" name="title" 
                    value="{{ old('title', $comic->title) }}"
                >
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Cover</label>
                <input 
                    type="text" 
                    class="form-control 
                    @error('thumb') is-invalid @enderror" 
                    id="thumb" 
                    name="thumb" 
                    value="{{ old('thumb', $comic->thumb) }}"
                >
                @error('thumb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea 
                    class="form-control 
                    @error('description') is-invalid @enderror" 
                    id="description" 
                    rows="3" 
                    name="description"
                >{{ old('description', $comic->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price in Cent</label>
                <input 
                    type="text" 
                    class="form-control
                    @error('price') is-invalid @enderror" 
                    id="price" 
                    name="price" 
                    value="{{ old('price', $comic->price) }}"
                >
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input 
                    type="text"
                    class="form-control
                    @error('series') is-invalid @enderror" 
                    id="series" 
                    name="series" 
                    value="{{ old('series', $comic->series) }}"
                >
                @error('series')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale" class="form-label">Sale Date</label>
                <input 
                    type="date" 
                    class="form-control 
                    @error('sale') is-invalid @enderror" 
                    id="sale" 
                    name="sale" 
                    value="{{ old('sale', $comic->sale_date) }}"
                >
                @error('sale')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input 
                    type="text" 
                    class="form-control 
                    @error('type') is-invalid @enderror" 
                    id="type" 
                    name="type" 
                    value="{{ old('text', $comic->type) }}"
                >
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>

            <div class="create-button">
                <a class="btn btn-secondary" href="/comics">Back</a>
                <button class="btn btn-primary">Submit</button>
            </div>

        </form>

    </div>


@endsection