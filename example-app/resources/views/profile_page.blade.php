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