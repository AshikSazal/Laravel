<h1>User login</h1>
<form action="users" method="POST">
    @csrf
    <input type="text" name="useremail" placeholder="Enter the email"><br><br>
    <input type="text" name="address" placeholder="Enter the address"><br><br>
    <button type="submit">Submit</button>
</form>
