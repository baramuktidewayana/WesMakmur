@extends('template')
@section('main')
    <h1>Edit Data</h1>
    <form action="{{ route('Product.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="exampleInputEmail1">NIP</label>
            <input type="number" class="form-control @error('nip') is-invalid @enderror" name="nip"
                value="{{ $data->nip }}">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Name  Product</label>
            <input type="text" class="form-control  @error('nameproduct') is-invalid @enderror" name="nameproduct"
                value="{{ $data->nameproduct }}">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Photo</label>
            <input type="text" class="form-control  @error('photo') is-invalid @enderror" name="photo"
                value="{{ $data->photo }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" class="form-control  @error('price') is-invalid @enderror" name="price"
                value="{{ $data->price }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Desc Product</label>
            <input type="text" class="form-control  @error('descproduct') is-invalid @enderror" name="descproduct"
                value="{{ $data->descproduct }}">
        </div>

       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection