@extends('layout.base')

@section('title', 'Our Comics')

@section('main')

    <h1>OUR COMICS</h1>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Price</th>
                <th scope="col">Sale Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->title }}</th>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('comics.show', ['comic' => $comic->id]) }}">View</a>
                        <a class="btn btn-warning" href="">Edit</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="paginator">
        {{ $comics->links() }}
    </div>
    

@endsection