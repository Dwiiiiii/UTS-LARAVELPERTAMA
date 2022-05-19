

<?php $__env->startSection('title' , 'Friends'); ?>
    
<?php $__env->startSection('content'); ?>
<a href="/friends/create" class="card-link btn-primary">Tambah teman</a>
<?php $__currentLoopData = $friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $friend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <a href="/friends/<?php echo e($friend['id']); ?>" class="card-title"><?php echo e($friend['nama']); ?></a>
      <h6 class="card-subtitle mb-2 text-muted"><?php echo e($friend['no_tlp']); ?></h6>
      <p class="card-text"><?php echo e($friend['alamat']); ?></p>
      <a href="/friends/<?php echo e($friend['id']); ?>/edit" class="card-link btn-warning">Edit teman</a>
      <form action="/friends/<?php echo e($friend['id']); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
      <button class="card-link btn-danger">Delete teman</button>
    </div>
  </div>
  

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div>
    <?php echo e($friends-> links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelkedua\resources\views/friends/index.blade.php ENDPATH**/ ?>