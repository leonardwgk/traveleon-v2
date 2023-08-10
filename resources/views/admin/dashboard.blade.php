@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="m-3">Halo, Admin!</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Jumlah Kursi</th>
                    <th>Tujuan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                    @foreach ($data as $list)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $list['nama'] }}</td>
                        <td>{{ $list['tanggalkeb'] }}</td>
                        <td>{{ $list['jumlah'] }}</td>
                        <td>{{ $list['tempat'] }}</td>
                        <td>{{ $list['status'] }}</td>
                        <td>
                            <form action="/admin/approve/{{ $list->id }}" method="post">
                            @csrf
                            @method('put')
                                <button type="submit" class="btn btn-primary">Konfirmasi</button>
                            </form>
                            <form action="/admin/delete/{{ $list->id }}" method="post">
                                @csrf
                                @method('delete')
                                    <button type="submit" class="btn btn-danger">Tolak</button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
@endsection