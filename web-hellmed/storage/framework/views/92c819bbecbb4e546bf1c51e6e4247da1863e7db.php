

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-center">
        <h1>Data Rumah Sakit</h1>
    </div>
    <div class="d-flex p-2">
        <a href="/dashboard/apotek/create" class="btn btn-primary">Tambah Rumah Sakit</a>
    </div>
    <?php if(session()->has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th></th>
                <th></th>
                <th>id</th>
                <th>Nama Apotek</th>
                <th>Alamat Apotek</th>
            </tr>
            
            <?php $__currentLoopData = $apotek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aptk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a href="/dashboard/apotek/<?php echo e($aptk->idApotek); ?>/edit" class="btn btn-warning">Ubah</a></td>
                <form action="/dashboard/apotek/<?php echo e($aptk->idApotek); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <td><button type="submit" class="btn btn-danger" id="btnHapus" onclick="return confirm('Are you Sure ?');">Hapus</button></td>
                </form>
                <td><?php echo e($aptk->idApotek); ?></td>
                <td><?php echo e($aptk->namaApotek); ?></td>
                <td><?php echo e($aptk->alamatApotek); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
 
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboardAdmin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TELU\Semester 6\RPL\web-hellmed\resources\views/dashboardAdmin/apotek/index.blade.php ENDPATH**/ ?>