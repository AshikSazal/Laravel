<h1>User login</h1>
<form action="users" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="username" placeholder="Enter the name"><br><br>
    <input type="password" name="password" placeholder="Enter the password"><br><br>
    <button type="submit">Submit</button>
</form>
<?php /**PATH D:\Projects\php\6. Login_with_session\resources\views/login.blade.php ENDPATH**/ ?>