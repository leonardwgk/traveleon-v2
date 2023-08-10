<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Login Travel</title>
</head>
<body>
    <div class="main-nav">
        <img class="logo" src="{{ asset('assets/logo.png') }}" alt="Travel">
        <a href="/" class="loginbtn btn btn-primary">Login</a>
    </div>
    <div class="sub-nav">
        <a href="/">Halaman Utama</a>
    </div>
    @yield('content')
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>