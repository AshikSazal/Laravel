<h1>Add Member</h1>
<a href="show"><h1>Show Member</h1></a><br>
<form action="users" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="username" placeholder="Enter the name"><br><br>
    <input type="text" name="email" placeholder="Enter the email"><br><br>
    <input type="text" name="address" placeholder="Enter the address"><br><br>
    <button type="submit">Submit</button>
</form>
<?php /**PATH D:\Projects\php\8. Data_save_database\resources\views/addmember.blade.php ENDPATH**/ ?>