<?php $__env->startSection('title' , 'Friends'); ?>

<?php $__env->startSection('content'); ?>
<div id="content" class="p-4 p-md-5 pt-5">
    
<a href="/friends/create"><button class="card-link btn-primary">Tambah teman</button></a>
<?php $__currentLoopData = $friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $friend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <div class="container">
        <div class="row">
              <div class="col">
              <h6>Nama : <a href="/friends/<?php echo e($friend['id']); ?>" class="card-title"><?php echo e($friend['nama']); ?></a> </h6>

              <h6>No. Telp : <?php echo e($friend['no_tlp']); ?></h6>
              <h6 class="card-text">Alamat : <?php echo e($friend['alamat']); ?></h6>
              <a href="/friends/<?php echo e($friend['id']); ?>/edit" ><button class="card-link btn-warning">Edit teman</button></a>
              <form action="/friends/<?php echo e($friend['id']); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
              <button class="card-link btn-danger">Delete teman</button>
              </form>
            </div>
         </div>
      </div>
    </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div>
    <?php echo e($friends-> links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\UTS-Laravel\UTS-Laravel\resources\views/friends/index.blade.php ENDPATH**/ ?>