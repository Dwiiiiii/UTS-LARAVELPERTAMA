<?php $__env->startSection('title','Detail Friend'); ?>


<?php $__env->startSection('content'); ?>
<div id="content" class="p-4 p-md-5 pt-5">
<div class="card">
    <div class="card-body">
<h2>DETAIL FRIENDS</h2>

        <h6>Nama Teman : <?php echo e($friend['nama']); ?></h6>
        <h6>No Tlp Teman : <?php echo e($friend['no_tlp']); ?></h6>
        <h6>Alamat Teman : <?php echo e($friend['alamat']); ?></h6>
        <?php
        if ($friend->groups_id!=0) {
            echo "<h6> Sudah Masuk Group..</h6>";
        }else {
            echo "<h6> Belum Masuk Group..</h6>";
        }

        ?>

    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraveltugas7\resources\views/friends/show.blade.php ENDPATH**/ ?>