

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

    <title>Document</title>

    
        <style>
            .error
            {

                color:red;
            }

            </style>

</head>

<body>

    <h1>Login Form</h1>
<form action="/su" method="get">
@csrf
<div class="result"> 

            @if(Session::get('fail'))
                {{Session::get('fail')}}
                @endif
                </div>
<div class="form-group">
<label for="example">Email</label>
<input type="text" name="email" placeholder="email" class="form-control">
<span class="error">
@error('name'){{$message}} @enderror</span><br>
<label for="example">Password</label>
<input type="text" name="pass" placeholder="password" class="form-control">
<span class="error">
@error('name'){{$message}} @enderror</span>
<br>

<input type="submit"  name="login"value="login">

<a href="regform" class="bg-info">Register</a>
</div>
</form>

</body>
</html>