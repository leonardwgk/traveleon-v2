@extends('layouts.user')

@section('content')
    <div class="container loginpanel">
        <h3>{{ $tiket['nama'] }}</h3>
        <p class="fw-bold">Status: {{ $tiket['status'] }}</p>
        <p>Tempat Wisata: {{ $tiket['tempat'] }}</p>
        <p>Tanggal Keberangkatan: {{ $tiket['tanggalkeb'] }}</p>
        <p>Jumlah Kursi: {{ $tiket['jumlah'] }}</p>
    </div>
@endsection