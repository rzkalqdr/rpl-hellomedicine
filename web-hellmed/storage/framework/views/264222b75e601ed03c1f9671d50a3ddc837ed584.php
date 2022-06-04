

<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
    <form action="/dashboard/rumahsakit" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <h3 class="mb-2 text-center">Tambah Rumah Sakit</h3>
            <div class="row mb-3">
                <label for="namaRS" class="col-sm-2 col-form-label">Nama Rumah Sakit</label>
                <input type="text" class="form-control <?php $__errorArgs = ['namaRS'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="namaRS" required value="<?php echo e(old('namaRS')); ?>"> 
                <?php $__errorArgs = ['namaRS'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="row mb-3">
                <label for="alamatRS" class="col-sm-2 col-form-label">Alamat Rumah Sakit</label>
                <input type="text" class="form-control <?php $__errorArgs = ['alamatRS'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="alamatRS" required value="<?php echo e(old('alamatRS')); ?>"> 
                <?php $__errorArgs = ['alamatRS'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            <a href="/dashboard" class="btn btn-warning">Back To Home</a>
            <button type="submit" name="submit" class="btn btn-primary">Create</button>
    </form>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboardAdmin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TELU\Semester 6\RPL\web-hellmed\resources\views/dashboardAdmin/rumahsakit/create.blade.php ENDPATH**/ ?>