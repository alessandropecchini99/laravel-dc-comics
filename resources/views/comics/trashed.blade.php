@extends('layout.base')

@section('title', 'Our Comics')

@section('main')

    <div class="index">

        @if (count($trashedComics) === 0)

            <h1>Nothing Deleted</h1>
            @if (session('delete_success'))
                @php $comic = session('delete_success') @endphp
                <div class="alert alert-danger m-0">
                    "{{ $comic->title }}" Permanently Deleted
                </div>
            @endif

        @else

            <h1>OUR DELETED COMICS</h1>

            @if (session('delete_success'))
                @php $comic = session('delete_success') @endphp
                <div class="alert alert-danger m-0">
                    "{{ $comic->title }}" Permanently Deleted
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
                    @foreach($trashedComics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->title }}</th>
                            <td>{{ $comic->series }}</td>
                            <td>{{ '$' . ($comic->price / 100) }}</td>                            
                            <td>{{ $comic->sale_date }}</td>
                            <td>
                                <form
                                    action="{{ route("comics.restore", ['comic' => $comic]) }}"
                                    method="post"
                                    class="d-inline-block"
                                >
                                    @csrf
                                    <button class="btn btn-success">Restore</button>
                                </form>

                                <!-- Button trigger modal -->
                                <button id="myModal" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myInput">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        @endif

        {{-- Paginator --}}
        <div class="paginator">
            {{ $trashedComics->links() }}
        </div>

        <a class="btn btn-secondary" href="{{ route('comics.index') }}">Back</a>

        <!-- Modal -->
        <div class="modal fade w-100" id="myInput" tabindex="-1" aria-labelledby="myInput" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myInput">Are you sure?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        This will permanently delete it!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>

                        <form
                            action="{{ route("comics.harddelete", ['comic' => $trashedComics]) }}"
                            method="post"
                            class="d-inline-block"
                        >
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection