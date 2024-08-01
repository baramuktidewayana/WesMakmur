@extends('template')
@section('main')
    <h1>Data Category</h1>
    <a href="{{ route('Category.create') }}" class="btn btn-primary">Add Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIC</th>
                <th scope="col">Name Category</th>
                <th scope="col">Desc  Category</th>
          
               
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nic }}</td>
                    <td>{{ $item->namecategory }}</td>
                    <td>{{ $item->desccategory }}</td>
                    <td class="d-flex">
                        <a href="{{ route('Category.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('Category.destroy', $item->id) }}" method="POST">
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