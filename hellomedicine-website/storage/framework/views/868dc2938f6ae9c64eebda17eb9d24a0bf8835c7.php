<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin: Rumah Sakit Data Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-3">
        <h3>Rumah Sakit Database</h3>
        <a href="/admin/rumahsakit/create" class="btn btn-primary float-right">Tambah Rumah Sakit</a>

        <br><br>

        <table class="table table-light table-bordered table-striped table-responsive-md">
            <tr>
                <th>ID</th>
                <th>Nama Rumah Sakit</th>
                <th>Alamat Rumah Sakit</th>
                <th>Action</th>
            </tr>

            <?php $__currentLoopData = $rumahsakit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($rs->idRS); ?></td>
                <td><?php echo e($rs->namaRS); ?></td>
                <td><?php echo e($rs->alamatRS); ?></td>
                <td><a href="/admin/rumahsakit/edit/<?php echo e($rs->idRS); ?>" class="btn btn-warning me-3">Edit</a>
                    <a href=" /admin/rumahsakit/delete/<?php echo e($rs->idRS); ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</body>

</html><?php /**PATH C:\Users\LENOVO\Documents\GitHub\rpl-hellomedicine\hellomedicine-website\resources\views/adminView/rumahSakit/dashboardRumahSakit.blade.php ENDPATH**/ ?>