<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Hello Medicine website favicon -->
    <link rel="shortcut icon" href="img/brand_hellomed.svg" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Google Fonts CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Hello Medicine external CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css\hellomedicine.css')); ?>">
    <title>Hello Medicine</title>

    <style>
    body {
        background-image: url("<?php echo e(asset('img\icon_doctor2.png')); ?>");
    }

    .card {
        text-align: center;
        margin-top: 2em;
        border-radius: 1em;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .card img {
        width: 50%;
        margin: 0 auto;
    }

    .next {
        color: #72C985;
    }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <div class="col">
                <a class="navbar-brand me-3" href="#">
                    <img src="<?php echo e(asset('img\brand_hellomed.svg')); ?>" alt="" width="40" height="40"
                        class="d-inline-block align-text-top">
                    <span id="hellomed-brand">Hello Medicine</span>
                </a>
            </div>

            <div class="col-8">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link hellomed-accent active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hellomed-accent" href="/artikel">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hellomed-accent" href="#">Tanya Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hellomed-accent" href="#">Tanya Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hellomed-accent" href="#">Tanya Dokter</a>
                    </li>
                </ul>
            </div>

            <div class="col-2">
                <div class="text-end">
                    <button class="btn btn-outline-success me-5" type="button"
                        style="margin-right: 30px;">Login</button>
                    <button class="btn btn-success" type="button">Download</button>
                </div>
            </div>
        </div>

    </nav>

    <div class=" p-5 mb-4 rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5" style="font-weight:1000; font-size: 29px; margin-left: 10px; color: #72C985;">Artikel
                Terupdate</h1>
            <div class=" p-5 mb-4 rounded-3">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card" style="width: 450px;">
                            <div class="card-body">
                                <img src="hellomed.svg">
                                <p class="card-text" style="margin-top: 5px;">Kenali Test Anxiety Disorder yang bisa
                                    dialami <br> Pelajar Hingga Mahasiswa</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card" style="width: 450px;">
                            <div class="card-body">
                                <img src="hellomed.svg">
                                <p class="card-text" style="margin-top: 5px;">Kenali Test Anxiety Disorder yang bisa
                                    dialami <br> Pelajar Hingga Mahasiswa</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <span class="fa-stack fa-4x" style="margin-top: 70%;">
                            <i class="fa-solid fa-circle fa-stack-2x next"></i>
                            <i class="fa-solid fa-angle-right fa-stack-1x"></i>
                            <a href="#" class="stretched-link"></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>

</html><?php /**PATH C:\Users\LENOVO\Documents\GitHub\rpl-hellomedicine\hellomedicine-website\resources\views/artikel.blade.php ENDPATH**/ ?>