<?php 
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "data_santri");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn; 
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $telp = htmlspecialchars($data["telp"]);
    $ayah = htmlspecialchars($data["ayah"]);
    $ibu = htmlspecialchars($data["ibu"]);

    $query = "INSERT INTO santri
                VALUES
                ('', '$nama', '$alamat', '$telp', '$ayah', '$ibu')
                
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>