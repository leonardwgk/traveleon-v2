<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Travel</title>
</head>
<body>
    <div class="main-nav">
        <img class="logo" src="{{ asset('assets/logo.png') }}" alt="Travel">
        <a href="/logout" class="loginbtn btn btn-primary">Logout</a>
    </div>
    <div class="sub-nav">
        <a href="/user">Beli Tiket</a>
        <a href="/user/account">Informasi Akun</a>
        <a href="/user/wisata">Daftar Wisata</a>
    </div>
    @yield('content')
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>