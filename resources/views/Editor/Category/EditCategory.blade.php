@extends('template')
@section('main')
    <h1>Edit Data</h1>
    <form action="{{ route('Post.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="exampleInputEmail1">Nic</label>
            <input type="number" class="form-control @error('nic') is-invalid @enderror" name="nic"
                value="{{ $data->nic }}">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Name Category</label>
            <input type="text" class="form-control  @error('namecategory') is-invalid @enderror" name="namecategory"
                value="{{ $data->namecategory }}">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Desc Category</label>
            <input type="text" class="form-control  @error('desccactegory') is-invalid @enderror" name="desccategory"
                value="{{ $data->desccategory }}">
        </div>


       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection