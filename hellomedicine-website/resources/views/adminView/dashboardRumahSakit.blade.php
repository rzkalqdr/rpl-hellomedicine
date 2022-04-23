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

            @foreach ($rumahsakit as $rs)
            <tr>
                <td>{{ $rs->idRS }}</td>
                <td>{{ $rs->namaRS }}</td>
                <td>{{ $rs->alamatRS }}</td>
                <td><a href="/admin/rumahsakit/edit" class="btn btn-warning me-3">Edit</a>
                    <a href=" /admin/rumahsakit/delete" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>