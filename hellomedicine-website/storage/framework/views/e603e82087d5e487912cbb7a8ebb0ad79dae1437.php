

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-center">
        <h1>Data Rumah Sakit</h1>
    </div>
    <div class="d-flex p-2">
        <a href="/dashboard/rumahsakit/create" class="btn btn-primary">Tambah Rumah Sakit</a>
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
                <th>Nama RS</th>
                <th>Alamat RS</th>
            </tr>
            
            <?php $__currentLoopData = $rumahsakit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a href="/dashboard/rumahsakit/<?php echo e($rs->idRS); ?>/edit" class="btn btn-warning">Ubah</a></td>
                <form action="/dashboard/rumahsakit/<?php echo e($rs->idRS); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <td><button type="submit" class="btn btn-danger" id="btnHapus" onclick="return confirm('Are you Sure ?');">Hapus</button></td>
                </form>
                <td><?php echo e($rs->idRS); ?></td>
                <td><?php echo e($rs->namaRS); ?></td>
                <td><?php echo e($rs->alamatRS); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
 
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboardAdmin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TELU\Semester 6\RPL\web-hellmed\resources\views/dashboardAdmin/rumahsakit/index.blade.php ENDPATH**/ ?>