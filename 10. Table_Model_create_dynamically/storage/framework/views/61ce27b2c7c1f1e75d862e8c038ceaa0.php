<h1>User login</h1>
<form action="users" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="useremail" placeholder="Enter the email"><br><br>
    <input type="text" name="address" placeholder="Enter the address"><br><br>
    <button type="submit">Submit</button>
</form>
<?php /**PATH D:\Projects\php\10. table_create_dynamically\resources\views/login.blade.php ENDPATH**/ ?>