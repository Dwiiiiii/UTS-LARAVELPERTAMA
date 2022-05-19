

<?php $__env->startSection('title' , 'Groups'); ?>
    
<?php $__env->startSection('content'); ?>

<form action="/groups/addmember/<?php echo e($group->id); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama teman</label>
    <select class="form-select" aria-label="Default select example" name="friend_id">
      <option selected>Pilih teman untuk di masukan groups</option>
      <?php $__currentLoopData = $friend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($f->id); ?>"><?php echo e($f->nama); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Tambah ke group</button>
</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel5\resources\views/groups/addmember.blade.php ENDPATH**/ ?>