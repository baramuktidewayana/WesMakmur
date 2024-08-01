@extends('template')
@section('main')
    <h1>Data Post</h1>
    <a href="{{ route('Post.create') }}" class="btn btn-primary">Add Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIPT</th>
                <th scope="col">Tittle</th>
                <th scope="col">Fill</th>
                <th scope="col">Data Made</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nipt }}</td>
                    <td>{{ $item->tittle }}</td>
                    <td>{{ $item->fill }}</td>
                    <td>{{ $item->datemade }}</td>
                    <td class="d-flex">
                        <a href="{{ route('Post.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('Post.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection











@endsection