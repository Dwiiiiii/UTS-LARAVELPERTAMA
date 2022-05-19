

<?php $__env->startSection('title' , 'Friends'); ?>
    
<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $friend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?php echo e($friend['nama']); ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?php echo e($friend['no_tlp']); ?></h6>
      <p class="card-text"><?php echo e($friend['alamat']); ?></p>
      <a href="#" class="card-link btn-primary">Tambah teman</a>
      <a href="#" class="card-link btn-warning">Edit teman</a>
      <a href="#" class="card-link btn-danger">Delete teman</a>
    </div>
  </div>
  

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelkedua\resources\views/friend.blade.php ENDPATH**/ ?>