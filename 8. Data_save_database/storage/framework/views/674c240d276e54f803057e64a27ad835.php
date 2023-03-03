<h1>Member List</h1>
<a href="user"><h1>Add Member</h1></a><br>
<table border="1">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Delete</td>
    </tr>
    <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($member['id']); ?></td>
        <td><?php echo e($member['name']); ?></td>
        <td><?php echo e($member['address']); ?></td>
        <td><a href="<?php echo e('delete/'.$member['id']); ?>">Delete</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH D:\Projects\php\8. Data_save_database\resources\views/list.blade.php ENDPATH**/ ?>