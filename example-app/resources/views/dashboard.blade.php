
<html>
<head>
<style>

.shade 

{
    background:black;
}
h1
{
    color:white;
}
</style>
</head>
<body class="shade">
<h1><center>welcome user</h1>
<h1>profile page</h1>
<a href="loginform">Logout</a>
<form action="" method="get">
@csrf
<?php
session_start();


?>
  Name: {{session('user')}}<br>
 Password:{{session('users')}}

</form>
<a href="logform">back to</a>
</body>
</html>