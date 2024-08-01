@extends('template')
@section('main')
    <h1>Edit Data</h1>
    <form action="{{ route('Post.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="exampleInputEmail1">NIPT</label>
            <input type="number" class="form-control @error('nipt') is-invalid @enderror" name="nipt"
                value="{{ $data->nipt }}">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Tittle</label>
            <input type="text" class="form-control  @error('tittle') is-invalid @enderror" name="tittle"
                value="{{ $data->tittle }}">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Fill</label>
            <input type="text" class="form-control  @error('fill') is-invalid @enderror" name="fill"
                value="{{ $data->fill }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Date Made</label>
            <input type="date" class="form-control  @error('datemade') is-invalid @enderror" name="datemade"
                value="{{ $data->datemade }}">
        </div>

       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection