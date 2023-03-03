<h1>User login</h1>
<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter the name"><br><br>
    <input type="password" name="password" placeholder="Enter the password"><br><br>
    <button type="submit">Submit</button>
</form>
