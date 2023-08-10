@extends('layouts.main')

@section('content')
    <div class="container loginpanel">
        <form class="form-group" method="post" action="/login/validate">
            @csrf
            <h2 class="text-center mt-4">Login</h2>
            @if($message = Session::get('failed'))
                <div class="alert alert-danger mt-4" role="alert">
                    {{ $message }}
                </div>
            @endif
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
            <button type="submit" class="btn btn-primary mt-4">Login</button>
            <p>Belum memiliki akun? <a href="/register">Daftar sekarang!</a></p>
        </form>
    </div>
@endsection