

<?php $__env->startSection('title' , 'Groups'); ?>
    
<?php $__env->startSection('content'); ?>
<a href="/groups/create" class="card-link btn-primary">Tambah group</a>
<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <a href="/groups/<?php echo e($group['id']); ?>" class="card-title"><?php echo e($group['name']); ?></a>
      <p class="card-text"><?php echo e($group['description']); ?></p>
      
      <hr>
      <a href="" class="card-link btn-primary">Tambah Anggota teman</a>
      
      <?php $__currentLoopData = $group->friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $friend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li>  <?php echo e($friend->nama); ?>  </li>    
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <hr>
    <a href="/groups/<?php echo e($group['id']); ?>/edit" class="card-link btn-warning">Edit group</a>
    <form action="/groups/<?php echo e($group['id']); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
      <button class="card-link btn-danger">Delete group</button>
    </div>
  </div>
  

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div>
    <?php echo e($groups-> links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelkedua\resources\views/groups/index.blade.php ENDPATH**/ ?>