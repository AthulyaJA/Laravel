<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <style>
            .error
            {

                color:red;
            }
            .shade  
            {
                background-color:rgba(0,0,122,0.5);
            }
            .top {
                margin-left:500px;
            }
          body{
              background:black;
          }
          input{
              margin-left:20px;
          }
            </style>

</head>

<body class="top">
    <h1>Register Form</h1>
<form action="/vali_reg" method="post">
@csrf
<div clas="container">
                <div class="row">
                <div class="col-6">
<div class="shade">
<div class="result"> 

            @if(Session::get('success'))
                {{ Session::get('success')}}
                @endif
                    <div class="alert alert-info">
                @if(Session::get('fail'))
                {{ Session::get('fail')}}
                @endif
                </div>
                </div>
                <br>
                
 
<input type="text" name="name" placeholder="username" value="{{ old('name') }}"><br>
<span class="error">
@error('name'){{$message}} @enderror</span>
<br>
<input type="text" name="email" placeholder="email" value="{{ old('email') }}"><br>
<span class="error">
@error('email'){{$message}} @enderror</span><br>
<input type="text" name="pass" placeholder="password" value="{{ old('pass') }}"><br>
<span class="error">
@error('pass'){{$message}} @enderror</span>
<br>
<button type="submit" value="Register" class=" btn bg-info">Register</button>
<a href="logform">Login</a>
</div>
</form>
</div>
</body>
</html>