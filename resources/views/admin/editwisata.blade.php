@extends('layouts.admin')

@section('content')
    <div class="container mt-2">
        <form action="/admin/wisata/update/{{ $wisata['id'] }}" method="post" class="form-group">
            @csrf
            @method('put')
            <h2>Edit Tempat Wisata</h2>
            <label for="pulau">Pulau:</label>
            <input type="text" name="pulau" id="pulau" class="form-control" value="{{ $wisata['pulau'] }}">
            <label for="wisata">Tempat Wisata:</label>
            <input type="text" name="wisata" id="wisata" class="form-control" value="{{ $wisata['wisata'] }}">
            <button type="submit" class="btn btn-primary mt-2">Edit</button>
        </form>
@endsection