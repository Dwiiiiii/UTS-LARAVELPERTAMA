<?php $__env->startSection('title','detail group'); ?>


<?php $__env->startSection('content'); ?>
<div id="content" class="p-4 p-md-5 pt-5">
<div class="card">
    <div class="card-body">
        <h2>DETAIL GROUP</h2>
        <h6><font-color=red>Nama Group : <?php echo e($group['name']); ?></h6>
        <h6>Deskripsi : <?php echo e($group['description']); ?></></h6>
        <?php
                if ($group->id==1) {
                    echo "<h6>Jumlah Anggota Group saat ini : $friend </h6>";
                } elseif ($group->id==2) {
                    echo "<h6>Jumlah Anggota Group saat ini : $friend2 </h6>";
                } elseif ($group->id==3) {
                    echo "<h6>Jumlah Anggota Group saat ini  : $friend3 </h6>";
                } elseif ($group->id==4) {
                    echo "<h6>Jumlah Anggota Group saat ini : $friend4 </h6>";
                } else {
                    echo " Tidak Ada Grup";
                }
        ?>
</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\UTS-Laravel\UTS-Laravel\resources\views/groups/show.blade.php ENDPATH**/ ?>