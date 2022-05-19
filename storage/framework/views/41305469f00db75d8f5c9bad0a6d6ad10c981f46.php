<?php $__env->startSection('title','cobaaaa'); ?>


<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <h3>Name : <?php echo e($group['name']); ?></h3>
        <h3>Description : <?php echo e($group['description']); ?></h3>
</div>
</div>
<?php $__env->stopSection(); ?>

    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelkedua\resources\views/groups/show.blade.php ENDPATH**/ ?>