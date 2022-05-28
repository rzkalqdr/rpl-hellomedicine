<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Hello Medicine website favicon -->
    <link rel="shortcut icon" href="img/brand_hellomed.svg" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Google Fonts CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

    <!-- Hello Medicine external CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css\hellomedicine.css')); ?>">
    <title>Hello Medicine</title>

    <style>
        body {
            background-image: url("<?php echo e(asset('img\icon_doctor2.png')); ?>");
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <div class="col">
                <a class="navbar-brand me-3" href="#">
                    <img src="img/brand_hellomed.svg" alt="" width="40" height="40" class="d-inline-block align-text-top">
                    <span id="hellomed-brand">Hello Medicine</span>
                </a>
            </div>
            <div class="col-8">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
                    <li class="nav-item me-2">
                        <a class="nav-link hellomed-accent" href="/">Home</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link hellomed-accent" href="/artikel">Artikel</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link hellomed-accent" href="/">Tanya Dokter</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link hellomed-accent active" aria-current="page" href="/rumahsakit">Rumah Sakit</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link hellomed-accent" href="#">Apotek</a>
                    </li>
                </ul>
            </div>

            <div class="col-2">
                <div class="text-end">
                    <?php if(auth()->guard()->check()): ?>
                    Welcome, <?php echo e(auth()->user()->username); ?>

                    <form action="/logout">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-warning me-2">Logout</button>
                    </form>
                    <?php else: ?>
                    <a href="/login"><button class="btn btn-outline-success me-2" type="button" style="margin-right: 30px;">Login</button></a>
                    <a href="/register"><button class="btn btn-success" type="button">Daftar</button></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </nav>

    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>Nama RS</th>
                    <th>Alamat RS</th>
                </tr>

                <?php $__currentLoopData = $rumahsakit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($rs->idRS); ?></td>
                    <td><?php echo e($rs->namaRS); ?></td>
                    <td><?php echo e($rs->alamatRS); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html><?php /**PATH D:\TELU\Semester 6\RPL\web-hellmed\resources\views/homepage_rumahsakit.blade.php ENDPATH**/ ?>