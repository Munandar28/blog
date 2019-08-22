<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>
    <body>
    <div class="login-page"> 
    <div class="form"> 
        <div align="center"> <form action="{{ route('auth') }}" method="POST">
            @csrf
            <label>Email : </label>
            <input type="email" name="email" />
            <br />
            <label>Password : </label>
            <input type="password" name="password" />
            <hr />
            <button type="submit">Sign In</button>
        </form>
        </div>
    </div>
    </div>

 
    </body>
</html>
