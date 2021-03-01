<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Caspian-Admin</title>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
<div class="container">
    <form class="form-signin" action="{{ route('yonetim.oturumac') }}" method="post">
        {{csrf_field()}}
        <img style="width: 240px; height: auto" src="/img/logo.png" class="logo">

        @include('layouts.partials.errors')

        <label for="email" class="sr-only">E-mail</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
        <label for="sifre" class="sr-only">Parol</label>
        <input type="password" id="password" name="sifre" class="form-control" placeholder="Şifre" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="benihatirla" value="1" checked> Meni ýatda sakla
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş</button>
        <div class="links">
            <a href="{{ route('anasayfa') }}">&larr; Saýda gir</a>
        </div>
    </form>
</div>

<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
</body>
</html>
