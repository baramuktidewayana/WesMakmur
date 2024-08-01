@extends('template')
@section('main')
    <h1>Add Data</h1>
    <form action="{{ route('Post.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">NIPT</label>
            <input type="number" class="form-control @error('nipt') is-invalid @enderror" name="nipt"
                value="{{ old('nipt') }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Tittle</label>
            <input type="text" class="form-control  @error('tittle') is-invalid @enderror" name="tittle"
                value="{{ old('tittle') }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Fill</label>
            <input type="text" class="form-control  @error('fill') is-invalid @enderror" name="fill"
                value="{{ old('fill') }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Date Made</label>
            <input type="date" class="form-control  @error('datemade') is-invalid @enderror" name="datemade"
                value="{{ old('datemade') }}">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection