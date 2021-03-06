<html>
    <head>
        <style>
            .error
            {

                color:red;
            }

            </style>

</head>

<body>
    
<form action="log" method="post">
@csrf
 
<input type="text" name="name" placeholder="username">
<span class="error">
@error('name'){{$message}} @enderror</span><br>
<input type="text" name="pass" placeholder="password"><span class="error">
@error('pass'){{$message}} @enderror</span>
<br>
<input type="submit" value="login">

</form>

</body>
</html>