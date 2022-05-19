

<?php $__env->startSection('title' , 'Friends'); ?>
    
<?php $__env->startSection('content'); ?>
<form action="/friends/store" method="POST" <?php echo csrf_field(); ?>>
  <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No.Telpon</label>
    <input type="text" class="form-control" name="no_tlp" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelkedua\resources\views/create.blade.php ENDPATH**/ ?>