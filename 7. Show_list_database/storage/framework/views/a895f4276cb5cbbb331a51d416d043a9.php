<h1>Member List</h1>
<table border="1">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
    </tr>
    <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($member['id']); ?></td>
        <td><?php echo e($member['name']); ?></td>
        <td><?php echo e($member['address']); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<div>
    <?php echo e($members->links()); ?>

</div>

<style>
    .text-sm{
        margin-top: 30px;
    }
.w-5{
    margin: 10px;
    height: 5%;
    width: 5%;
}

</style>
<?php /**PATH D:\Projects\php\7. Show_list_database\resources\views/list.blade.php ENDPATH**/ ?>