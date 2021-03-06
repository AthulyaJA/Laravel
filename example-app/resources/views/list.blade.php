<html>
<head>
</head>
<body>
<form action="list" method="get">
<table border = "1">
<tr>

<td>members_ name</td>
<td>Email</td>
<td>Address</td>
<td>Action</td>
</tr>
@foreach ($users as $user)
<tr>

<td>{{ $user->members_name }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->Address }}</td>
<td><a href={{"delet/".$user->id}}>edit/<a href={{"update/".$user->id}}>update</a></td>
</tr>
@endforeach
</form>
</table>
</body>
</html>