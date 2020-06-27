<?php $__env->startSection('header'); ?> 
This is header
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?> 
    <br>
    I am from hello view file in folder. 
    <br>
    <?php echo e($data); ?>


    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h2><?php echo e($item); ?></h2>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if($user[0] === 'abc@ac.com'): ?>
        <br> The Id is matched.
    <?php else: ?>
        <br> The Id is mismatched.
    <?php endif; ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('script'); ?> 
<script>
    alert('Hello');
</script>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/synerzip/code/learning/resources/views/welcome/hello.blade.php ENDPATH**/ ?>