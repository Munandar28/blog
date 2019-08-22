<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/table.css') }}">
</head>
    <body>
        <form action="{{ route('auth') }}" method="POST">
            @csrf
            <label>Email : </label>
            <input type="email" name="email" />
            <br />
            <label>Password : </label>
            <input type="password" name="password" />
            <hr />
            <button type="submit">Sign In</button>
        </form>
    </body>
</html>
