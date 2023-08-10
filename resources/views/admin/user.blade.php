@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="m-3">Halo, Admin!</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Email Akun</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['role'] }}</td>
                        <td>
                            <a href="/admin/edit/{{ $user['id'] }}" class="btn btn-primary">Edit</a>
                            <form action="/admin/manage/delete/{{ $user['id'] }}" method="post">
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