

<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
    <form action="/dashboard/apotek/<?php echo e($apotek->idApotek); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
            <h3 class="mb-3 text-center" style="margin-bottom: 10px">Edit Data Apotek</h3>
            <div class="row mb-3">
                <label for="id" class="col-sm-2 col-form-label">id</label>
                <input type="text" class="form-control" name="idApotek" required value="<?php echo e(old('id', $apotek->idApotek)); ?>" readonly> 
            </div>
            <div class="row mb-3">
                <label for="namaApotek" class="col-sm-2 col-form-label">Nama Apotek</label>
                <input type="text" class="form-control <?php $__errorArgs = ['namaApotek'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="namaApotek" required value="<?php echo e(old('namaApotek', $apotek->namaApotek)); ?>"> 
                <?php $__errorArgs = ['namaApotek'];
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
                <label for="alamatApotek" class="col-sm-2 col-form-label">Alamat</label>
                <input type="text" class="form-control <?php $__errorArgs = ['alamatApotek'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="alamatApotek" style="font-size: 12px;" required value="<?php echo e(old('alamatApotek', $apotek->alamatApotek)); ?>"> 
                <?php $__errorArgs = ['alamatApotek'];
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
            <button type="submit" name="submit" class="btn btn-primary">Edit</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboardAdmin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TELU\Semester 6\RPL\web-hellmed\resources\views/dashboardAdmin/apotek/edit.blade.php ENDPATH**/ ?>