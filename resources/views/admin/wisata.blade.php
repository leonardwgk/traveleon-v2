@extends('layouts.admin')

@section('content')
    <div class="container mt-2">
        <form action="/admin/wisata/store" method="post" class="form-control">
            @csrf
            <h2>Tambah Tempat Wisata</h2>
            <p>Tekan tambah untuk menambah daftar wisata</p>
            <label for="pulau">Pulau:</label>
            <input type="text" name="pulau" id="pulau" class="form-control">
            <label for="wisata">Tempat Wisata:</label>
            <input type="text" name="wisata" id="wisata" class="form-control">
            <button type="submit" class="btn btn-primary mt-2">Tambah +</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pulau</th>
                    <th>Tempat Wisata</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                    @foreach ($wisatas as $wisata)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $wisata['pulau'] }}</td>
                        <td>{{ $wisata['wisata'] }}</td>
                        <td>
                            <a href="/admin/wisata/edit/{{ $wisata['id'] }}" class="btn btn-primary">Edit</a>
                            <form action="/admin/wisata/delete/{{ $wisata['id'] }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
@endsection