<?php
include "koneksi.php";
$id_barang = $_GET['n'];
$q = "delete from barang where id_barang='$id_barang'";
mysqli_query($koneksi, $q);
echo "Data Berhasil Terhapus";
echo "<br>";

?>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Barang</title>
    <style>
        a {
            display: inline-block;
            font-size: 7.5px;
            text-decoration: none;
            background-color: #0D4A88;
            color: #fff;
            margin: 10px 0;
            padding: 8px 12px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <a href='menampilkan.php'> Kembali</a>
</body>

</html>