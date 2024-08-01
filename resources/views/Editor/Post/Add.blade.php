@extends('template')
@section('main')
    <h1>Add Data</h1>
    <form action="{{ route('Product.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">NIP</label>
            <input type="number" class="form-control @error('nip') is-invalid @enderror" name="nip"
                value="{{ old('nip') }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Name Product</label>
            <input type="text" class="form-control  @error('nameproduct') is-invalid @enderror" name="nameproduct"
                value="{{ old('nameproduct') }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Photo</label>
            <input type="text" class="form-control  @error('photo') is-invalid @enderror" name="photo"
                value="{{ old('photo') }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" class="form-control  @error('price') is-invalid @enderror" name="price"
                value="{{ old('price') }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Desc Product</label>
            <input type="text" class="form-control  @error('descproduct') is-invalid @enderror" name="desccproduct"
                value="{{ old('descproduct') }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection