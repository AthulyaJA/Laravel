<html>
<head>


</head>
   <body>
   <h1> product updation</h1>
    <form action="/edit_p" method="post">   
                @csrf
                <input type="hidden" name="id" value="{{$user->id}}">
                        product:<input type="text" name="p_name" value="{{$user->product_name}}">
                        <br>
                    price:<input type="text" name="price" value="{{$user->price}}">
                   <br>
                    Quantity:<input type="text" name="qua" value="{{$user->qua}}">
                    <br>
                    <input type="submit" name="submit"><br>
               
            
               
        </form>
        </body>
</html>
