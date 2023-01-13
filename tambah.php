<?php 

require 'function.php';

if( isset($_POST["submit"]) ) {
    // cek data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
            ";

    } else {
        echo "
            <script>
                    alert('data gagal ditambahkan!');
                    document.location.href = 'index.php';
            </script>
            ";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Santri</title>
    <style>
    body {
        background-image: url(assets/img/bg7.png);
    }
    </style>

</head>

<body>
    <div class="container">
        <div class="row mt-4 table">
            <div class="col-md-6 offset-md-3 bg-light p-5 rounded-3 shadow">
                <h2 class="text-center fs-3"><b>Tambah</b>Santri</h2>
                <form class="form mb-5 p-3 g-3" method="post" enctype="multipart/form-data">
                    <label for="nama" class="form-label">Nama Santri : </label>
                    <input type="text" name="nama" class="form-control" id="nama">

                    <label for="alamat" class="form-label">Alamat Santri : </label>
                    <input type="text" name="alamat" class="form-control" id="alamat">

                    <label for="telp" class="form-label">No.Telp : </label>
                    <input type="text" name="telp" class="form-control" id="telp">

                    <label for="ayah" class="form-label">Nama Ayah : </label>
                    <input type="text" name="ayah" class="form-control" id="ayah">

                    <label for="ibu" class="form-label">Nama Ibu : </label>
                    <input type="text" name="ibu" class="form-control" id="ibu">

                    <div class="d-flex justify-content-end mb-2 mt-5">
                        <a href="index.php"><button class="btn btn-success" type="submit" name="submit">Tambah
                                Data</button></a>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>