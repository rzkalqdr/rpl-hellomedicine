

<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
    <form action="/dashboard/dokter" method="POST">
        <?php echo csrf_field(); ?>
        <h3 class="mb-2 text-center">Tambah Dokter</h3>
            <div class="row mb-3">
                <label for="idUser" class="col-sm-2 col-form-label">ID User</label>
                <select class="form-select form-select-sm <?php $__errorArgs = ['idUser'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-label=".form-select-sm example" name="idUser" required">
                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(old('idUser') == $usr->idUser): ?>
                            <option value="<?php echo e($usr->idUser); ?>" selected><?php echo e($usr->idUser); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($usr->idUser); ?>" selected><?php echo e($usr->idUser); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['idUser'];
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
                <label for="namaDokter" class="col-sm-2 col-form-label">Nama Dokter</label>
                <input type="text" class="form-control <?php $__errorArgs = ['namaDokter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="namaDokter" required value="<?php echo e(old('namaDokter')); ?>"> 
                <?php $__errorArgs = ['namaDokter'];
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
                <label for="Spesialisasi" class="col-sm-2 col-form-label">Spesialisasi</label>
                <input type="text" class="form-control <?php $__errorArgs = ['Spesialisasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Spesialisasi" required value="<?php echo e(old('Spesialisasi')); ?>"> 
                <?php $__errorArgs = ['Spesialisasi'];
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
                <label for="NomorSTR" class="col-sm-2 col-form-label">Nomor STR</label>
                <input type="text" class="form-control <?php $__errorArgs = ['NomorSTR'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="NomorSTR" required value="<?php echo e(old('NomorSTR')); ?>"> 
                <?php $__errorArgs = ['NomorSTR'];
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
<?php echo $__env->make('dashboardAdmin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TELU\Semester 6\RPL\web-hellmed\resources\views/dashboardAdmin/dokter/create.blade.php ENDPATH**/ ?>