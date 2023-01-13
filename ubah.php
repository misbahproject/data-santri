<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
    <style>
    body {
        background-image: url(assets/img/bg7.png);
    }
    </style>

</head>

<body>
    <div class="container">
        <div class="row mt-4 table">
            <div class="col-md-6 offset-md-3 bg-light p-5 rounded-5 shadow">
                <h2 class="text-center fs-3"><b>Ubah Data</b>Santri</h2>
                <form class="form mb-5 p-3 g-3" method="post">
                    <label for="namaSantri" class="form-label">Nama Santri : </label>
                    <input type="text" class="form-control" id="namaSantri">

                    <label for="alamatSantri" class="form-label">Alamat Santri : </label>
                    <input type="text" class="form-control" id="alamatSantri">

                    <label for="alamatSantri" class="form-label">No.Telp : </label>
                    <input type="text" class="form-control" id="alamatSantri">

                    <label for="alamatSantri" class="form-label">Nama Ayah : </label>
                    <input type="text" class="form-control" id="alamatSantri">

                    <label for="alamatSantri" class="form-label">Nama Ibu : </label>
                    <input type="text" class="form-control" id="alamatSantri">

                    <div class="d-flex justify-content-end mb-2 mt-5">
                        <a href=""><button class=" btn btn-success" type="submit">Ubah Data</button></a>
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