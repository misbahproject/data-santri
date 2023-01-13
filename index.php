<?php
require 'function.php';

$santri = query("SELECT * FROM santri");

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

    <title>Daftar Data siswa</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
    body {
        background-image: url(assets/img/bg.png);
    }
    </style>
</head>

<body>
    <div class="container p-5 mt-2">
        <h2 class="text-center text-white"><b>Data Santri Al-Karomah</b></h2>
        <h3 class="text-center text-white">Tahun 2023-2024</h3><br>

        <div class="mt-3">
            <div class="d-grid d-md-flex justify-content-md-end">
                <a href="tambah.php"><button class="btn btn-success" type="submit">+Tambah Data</button></a>
            </div>

            <form action="" method="post">
                <div class="input-group mb-4">
                    <input type="text" name="keyword" size="78" autofocus placeholder="masukkan keyword pencarian.."
                        autocomplete="off">
                    <button class="btn btn-success" type="submit" name="cari">Cari!</button>
                </div>
            </form>
        </div>

        <table class="table table-striped table-light table-hover" border="1" cellpadding="10">
            <thead>
                <th>No.</th>
                <th>Nama Santri</th>
                <th>Alamat Santri</th>
                <th>No.Telp</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Aksi</th>
            </thead>

            <?php $i = 1; ?>
            <?php foreach( $santri as $row ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
                <td><?= $row["telp"]; ?></td>
                <td><?= $row["ayah"]; ?></td>
                <td><?= $row["ibu"]; ?></td>
                <td>
                    <a class="badge bg-warning" href="ubah.php?id=<?= $row["id"]; ?>"><i
                            class="bi bi-pencil-square"></i></a>
                    <a class="badge bg-danger" href="hapus.php?id=<?= $row["id"]; ?>"
                        onclick="return confirm('Apakah anda yakin?');"><i class="bi bi-trash text-white"></i></a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            <tfoot>
                <td>No.</td>
                <td>Nama Santri</td>
                <td>Alamat Santri</td>
                <td>No.Telp</td>
                <td>Nama Ayah</td>
                <td>Nama Ibu</td>
                <td>Aksi</td>
            </tfoot>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>