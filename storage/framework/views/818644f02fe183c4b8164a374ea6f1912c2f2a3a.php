

<?php $__env->startSection('title' , 'Urutan'); ?>
    
<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h1>Urutan Ke- <?php echo e($number['ke']); ?> </h1>
<h3>Nomor Ke- <?php echo e($number['nomor']); ?></h3>    

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelsatu\resources\views/urutan.blade.php ENDPATH**/ ?>