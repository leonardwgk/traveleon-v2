@extends('layouts.user')

@section('content')
    <div class="container">
        <h2 class="text-center mt-4">Formulir Pemesanan</h2>
        <form action="/user/pesan" method="post" class="form-control">
            @csrf
            <label for="nama">Nama Lengkap:</label>
            <input type="text" name="nama" id="nama" class="form-control" required value="{{ $user['nama'] }}">
            <label for="nik">NIK:</label>
            <input type="number" name="nik" id="nik" class="form-control" required value="{{ $user['nik'] }}">
            <label for="telpon">No. Telpon:</label>
            <input type="number" name="telpon" id="telpon" class="form-control" required value="{{ $user['telpon'] }}">
            <label for="negara">Negara:</label>
            <input type="text" name="negara" id="negara" class="form-control" required value="{{ $user['negara'] }}">
            <label for="provinsi">Provinsi:</label>
            <input type="text" name="provinsi" id="provinsi" class="form-control" required value="{{ $user['provinsi'] }}">
            <label for="kota">Kota:</label>
            <input type="text" name="kota" id="kota" class="form-control" required value="{{ $user['kota'] }}">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" class="form-control" required value="{{ $user['alamat'] }}">
            <label for="umur">Umur:</label>
            <input type="number" name="umur" id="umur" class="form-control" required value="{{ $user['umur'] }}">
            <label for="tanggalkeb">Tanggal Keberangkatan:</label>
            <input type="date" name="tanggalkeb" id="tanggalkeb" class="form-control" required>
            <label for="tempat">Tempat Wisata:</label>
            <select name="tempat" id="tempat" class="form-control" required>
                @foreach ($wisatas as $wisata)
                    <option value="{{ $wisata['wisata'] }}">{{ $wisata['wisata'] }}</option>
                @endforeach
            </select>
            <label for="jumlah">Jumlah Kursi:</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" required>
            <input type="text" name="user_id" id="user_id" hidden value="{{ $user_id }}">
            <button type="submit" class="btn btn-primary mt-2">Pesan Tiket</button>
        </form>
    </div>
@endsection