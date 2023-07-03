@extends('layout.base')

@section('title', 'Our Comics')

@section('main')

    <div class="index">
    
        <h1>OUR COMICS</h1>

            @if (session('delete_success'))
                @php $comic = session('delete_success') @endphp
                <div class="alert alert-danger m-0">
                    "{{ $comic->title }}" Deleted
                    <form
                        action="{{ route("comics.restore", ['comic' => $comic]) }}"
                        method="post"
                        class="d-inline-block restore-btn"
                    >
                        @csrf
                        <button class="btn btn-warning">Restore</button>
                    </form>
                </div>
            @endif

            @if (session('restore_success'))
                @php $comic = session('restore_success') @endphp
                <div class="alert alert-success">
                    "{{ $comic->title }}" Restored
                </div>
            @endif

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
                        <td>{{ '$' . ($comic->price / 100) }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('comics.show', ['comic' => $comic->id]) }}">View</a>
                            <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Edit</a>
                            <form
                                action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"
                                method="post"
                                class="d-inline-block"
                            >
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Paginator --}}
        <div class="paginator">
            {{ $comics->links() }}
        </div>

        {{-- other buttons --}}
        <div>
            {{-- Add New Comic --}}
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Add new Comic</a>

            {{-- Trash Can --}}
            <a class="btn btn-warning" href="{{ route('comics.trashed') }}">
                Trash Can
                <i class="bi bi-trash3"></i>
            </a>
        </div>

    </div>

@endsection