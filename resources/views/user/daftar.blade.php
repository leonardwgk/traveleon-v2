@extends('layouts.user')

@section('content')
    @foreach ($tikets as $tiket)
        <div class="container mt-4">
            <a href="/detail/{{ $tiket['id'] }}"><h4>{{ $tiket['nama'] }}</h4></a>
            <p>Tanggal Keberangkatan: {{ $tiket['tanggalkeb'] }}</p>
        </div>
    @endforeach
@endsection