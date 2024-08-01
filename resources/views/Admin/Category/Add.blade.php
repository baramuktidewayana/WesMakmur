@extends('template')
@section('main')
    <h1>Add Data</h1>
    <form action="{{ route('Category.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">Nic</label>
            <input type="number" class="form-control @error('nic') is-invalid @enderror" name="nic"
                value="{{ old('nic') }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Name Category</label>
            <input type="text" class="form-control  @error('nameacategory') is-invalid @enderror" name="nameacategory"
                value="{{ old('namecategory') }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Desc Category</label>
            <input type="text" class="form-control  @error('desccategory') is-invalid @enderror" name="desccaetgory"
                value="{{ old('desccategory') }}">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection