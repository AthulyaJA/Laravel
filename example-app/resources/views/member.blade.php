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

    <form action="table">
        <h1>ADD MEMBERS</h1>
                <div class="text-center">
                        Name:<input type="text" name="name">
                        <span class="error">
                    @error('name'){{$message}} @enderror</span><br>
                    Email:<input type="text" name="email">
                    <span class="error">
                    @error('email'){{$message}} @enderror</span><br>
                    Address:<input type="text" name="add">
                    <span class="error">
                    @error('Addres'){{$message}} @enderror</span><br>
                    <input type="submit" value="submit"><br>
                </div>
        </form>
</html>
