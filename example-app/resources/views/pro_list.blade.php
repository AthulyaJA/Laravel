<html>
<head>
</head>
<body>
<form action="up_pro" method="get">
<table border = "1">
<tr>

<td>Product_name</td>
<td>Price</td>
<td>Quantity</td>
<td>Action</td>
</tr>
@foreach ($users as $user)
<tr>

<td>{{ $user->product_name }}</td>
<td>{{ $user->price }}</td>
<td>{{ $user->qua }}</td>
<td><a href={{"delet/".$user->id}}>Delete/<a href={{"up_pro/".$user->id}}>update</a></td>
</tr>
@endforeach
</form>
</table>
</body>
</html>