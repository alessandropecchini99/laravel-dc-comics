@extends('layout.base')

@section('title', 'Our Comics')

@section('main')

    <div class="index">
    
        <h1>OUR COMICS</h1>

        <table class="table table-striped">
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
                            <a data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Paginator --}}
        <div class="paginator">
            {{ $comics->links() }}
        </div>

        {{-- Add New Comic --}}
        <a class="btn btn-primary" href="{{ route('comics.create') }}">Add new Comic</a>

        <!-- Delete Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true" style="color: black;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModalLabel">Are you sure?</h1>
                    </div>
                    <div class="modal-body">
                        You can't go back!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection