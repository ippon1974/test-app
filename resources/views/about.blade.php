<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Не бойтесь нас мы негры</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Не бойтесь нас мы негры</h1>
    <a href="{{url('/')}}" title="home">Welcom</a>
    <a href="{{url('/hellocontroller')}}">Hello</a>
</body>
</html>
