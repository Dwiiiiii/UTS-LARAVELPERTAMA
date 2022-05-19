<?php $__env->startSection('title' , 'Groups'); ?>

<?php $__env->startSection('content'); ?>
<div id="content" class="p-4 p-md-5 pt-5">

<a href="/groups/create"><button class="card-link btn-primary">Tambah group</button></a>
<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <a href="/groups/<?php echo e($group['id']); ?>" class="card-title"><?php echo e($group['name']); ?></a>
      <p class="card-text"><?php echo e($group['description']); ?></p>

      <hr>
      <a href="/groups/addmember/<?php echo e($group['id']); ?>"> <button class="card-link btn-primary">Tambah Anggota teman</button></a>
      <ul class="list-group">
      <?php $__currentLoopData = $group->friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $friend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


        <li class="list-group-item d-flex justify-content-between align-items-center">
          <?php echo e($friend->nama); ?>

          <form action="/groups/deleteaddmember/<?php echo e($friend->id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
          <button type="submit" class="bedge card-link btn-danger">x</button>
        </form>
        </li>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

      <hr>
    <a href="/groups/<?php echo e($group['id']); ?>/edit"><button class="card-link btn-warning">Edit group</button></a>
    <form action="/groups/<?php echo e($group['id']); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
      <button class="card-link btn-danger">Delete group</button>
    </form>
    </div>
  </div>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div>
    <?php echo e($groups-> links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\UTS-Laravel\UTS-Laravel\resources\views/groups/index.blade.php ENDPATH**/ ?>