<h1>User login</h1>
<form action="users" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="username" placeholder="Enter the name">
    <br>
    <span style="color: red;"><?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
    <br>
    <input type="password" name="password" placeholder="Enter the password">
    <br>
    <span style="color: red;"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
    <br>
    <button type="submit">Login</button>
</form>
<?php /**PATH D:\Projects\php\4.Form_validation\resources\views/user.blade.php ENDPATH**/ ?>