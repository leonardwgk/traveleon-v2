@extends('layouts.main')

@section('content')
    <div class="container loginpanel">
        <form action="/admin/update/{{ $user->id }}" method="post" class="form-group">
            @csrf
            @method('put')
            <h2 class="text-center mt-3">Form Edit</h2>
            <label for="nama">Nama Lengkap:</label>
            <input type="text" name="nama" id="nama" class="form-control" required value="{{ $user['nama'] }}">
            <label for="nik">NIK:</label>
            <input type="number" name="nik" id="nik" class="form-control" required value="{{ $user['nik'] }}">
            <label for="umur">Umur:</label>
            <input type="number" name="umur" id="umur" class="form-control" required value="{{ $user['umur'] }}">
            <label for="telpon">Telpon:</label>
            <input type="number" name="telpon" id="telpon" class="form-control" required value="{{ $user['telpon'] }}">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required value="{{ $user['email'] }}">
            <label for="negara">Negara:</label>
            <input type="text" name="negara" id="negara" class="form-control" required value="{{ $user['negara'] }}">
            <label for="provinsi">Provinsi:</label>
            <input type="text" name="provinsi" id="provinsi" class="form-control" required value="{{ $user['provinsi'] }}">
            <label for="kota">Kota:</label>
            <input type="text" name="kota" id="kota" class="form-control" required value="{{ $user['kota'] }}">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" class="form-control" required value="{{ $user['alamat'] }}">
            <button type="submit" class="btn btn-primary mt-2">Update</button>
        </form>
    </div>
@endsection