

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-center">
        <h1>Data Users</h1>
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
                <th>Display Name</th>
                <th>Username</th>
                <th>Admin</th>
            </tr>
            
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a href="/dashboard/users/<?php echo e($users->idUser); ?>/edit" class="btn btn-warning">Ubah</a></td>
                <form action="/dashboard/users/<?php echo e($users->idUser); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <td><button type="submit" class="btn btn-danger" id="btnHapus" onclick="return confirm('Are you Sure ?');">Hapus</button></td>
                </form>
                <td><?php echo e($users->idUser); ?></td>
                <td><?php echo e($users->displayname); ?></td>
                <td><?php echo e($users->username); ?></td>
                <td><?php echo e($users->is_admin); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
 
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboardAdmin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TELU\Semester 6\RPL\web-hellmed\resources\views/dashboardAdmin/users/index.blade.php ENDPATH**/ ?>