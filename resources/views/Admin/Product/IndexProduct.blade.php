@extends('template')
@section('main')
    <h1>Data Product</h1>
    <a href="{{ route('Product.create') }}" class="btn btn-primary">Add Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIP</th>
                <th scope="col">Name Product</th>
                <th scope="col">Photo</th>
                <th scope="col">Price</th>
                <th scope="col">Desc Product</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->nameproduct }}</td>
                    <td>{{ $item->photo }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->descproduct }}</td>
                    <td class="d-flex">
                        <a href="{{ route('Product.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('Product.destroy', $item->id) }}" method="POST">
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