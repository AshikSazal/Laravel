<h1>User login</h1>
<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter the name">
    <br>
    <span style="color: red;">@error('username'){{$message}}@enderror</span>
    <br>
    <input type="password" name="password" placeholder="Enter the password">
    <br>
    <span style="color: red;">@error('password'){{$message}}@enderror</span>
    <br>
    <button type="submit">Login</button>
</form>
