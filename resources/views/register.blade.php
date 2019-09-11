<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"> -->
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register Web Magang</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
    <body>

        <div class="login-page"> 
        <div class="login-form"> 
        <div class="form"> 
            <div > <form action="/register/userstore" method="POST">
                @csrf
                <h2 class="text-center">Register</h2>   
                <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                <!-- <input type="email" name="email" /> -->
                <br />  
                </div>

                <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required"  />
                <hr />  
                </div>

                <div class="form-group">
                <input type="text" name="nama" class="form-control" placeholder="Nama" required="required"  />
                <hr />  
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                <!-- <h2 class="text-center">Log in</h2>        -->

                <!-- <div class="clearfix">
                <a href="#" class="pull-right">Forgot Password?</a> -->
            </div>   
        
            </form>
         </div>
 
    </body>
</html>
