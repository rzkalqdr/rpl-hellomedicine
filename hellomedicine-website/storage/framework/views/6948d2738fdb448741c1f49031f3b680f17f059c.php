<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin: Rumah Sakit Data Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-3">
        <h3>Tambah Data Rumah Sakit</h3>
    </div>

    <div class="container mt-3">
        <div class="form-group">
            <form action="/admin/rumahsakit/store" method="post">
                <?php echo e(csrf_field()); ?>

                <label for="nama">Nama Rumah Sakit</label> <input type="text" name="namaRS" id="namaRS" required="required" class="form-control">
                <br><br>
                <label for="alamat">Alamat Rumah Sakit</label> <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
                <br><br>
                <input type="submit" value="Tambah Rumah Sakit" class="btn btn-success">
            </form>
        </div>
    </div>
</body><?php /**PATH C:\Users\LENOVO\Documents\GitHub\rpl-hellomedicine\hellomedicine-website\resources\views/adminView/rumahSakit/addRumahSakit.blade.php ENDPATH**/ ?>