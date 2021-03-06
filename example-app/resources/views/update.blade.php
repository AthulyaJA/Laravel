<html>
<head>
<style>
input 
{

    margin:3px;
    
}
.error

{
    color:red;
}
</style>
</head>
   <body>
    <form action="/edit" method="post">
   
        <h1>ADD MEMBE</h1>
                <div class="text-center">
                @csrf
                
                <input type="hidden" name="id" value="{{$user->id}}">
                        Name:<input type="text" name="name" value=" {{$user->members_name}}">
                        <br>
                    Email:<input type="text" name="email" value="{{$user->email }}">
                   <br>
                    Address:<input type="text" name="add" value="{{$user->Address}}">
                    <br>
                    <input type="submit" name="update" vlaue="update"><br>
               
                </div>
               
        </form>
        </body>
</html>
