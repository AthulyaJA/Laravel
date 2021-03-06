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
    <h1>Login Form</h1>
<form action="loginfor" method="get">
@csrf
 
<input type="text" name="name" placeholder="username">
<span class="error">
</span><br>
<input type="text" name="pass" placeholder="password"><span class="error">
</span>
<br>
<input type="submit" value="login">

</form>

</body>
</html>