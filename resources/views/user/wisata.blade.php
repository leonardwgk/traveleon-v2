@extends('layouts.user')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pulau</th>
                    <th>Tempat Wisata</th>
                </tr>
            </thead>
            <?php $i=1 ?>
            @foreach ($wisatas as $wisata)
                <tbody>
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $wisata['pulau'] }}</td>
                        <td>{{ $wisata['wisata'] }}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection