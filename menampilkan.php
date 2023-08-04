<!DOCTYPE html>
<html>

<head>
    <title>Inventory Laboratorium Komputer</title>
</head>
<style>
    body {
        text-align: center;
        font-family: Arial, sans-serif;
        margin: 30px;
    }

    h1 {
        color: #000000;
        text-align: center;
    }

    table {

        border-collapse: collapse;
        width: 80%;
        margin: 20px 0;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f2f2f2;
    }

    a {
        text-align: center;
        text-decoration: none;
        background-color: #0D4A88;
        color: #fff;
        padding: 8px 12px;
        border-radius: 5px;

        justify-content: center;
        align-items: center;
    }

    a:hover {
        background-color: #0D4A88;
    }
</style>

<body>
    <h1>Inventory Laboratorium Komputer</h1>

    <a href="tambah.php">TAMBAH DATA</a>
    <?php
    include "koneksi.php";

    $q = "select * from barang";
    $barang  = mysqli_query($koneksi, $q);

    echo "<table border= 1";
    echo "<tr>
<th>ID Barang</th><th>Nama Barang</th><th>Keterangan</th><th>Jumlah</th><th colspan=2>Aksi</th>";
    while ($r = mysqli_fetch_array($barang)) {
        echo "<tr><td>" . $r['id_barang'] . "</td>";
        echo "<td>" . $r['nama_barang'] . "</td>";
        echo "<td>" . $r['ket'] . "</td>";
        echo "<td>" . $r['jml'] . "</td>";

        echo "<td><a href='mengubah.php?n=" . $r['id_barang'] . "'>EDIT</a></td>";
        echo "<td><a href='menghapus.php?n=" . $r['id_barang'] . "'>HAPUS</a></td>";
        echo "<tr>";
    }
    echo "</table>";
    ?>


</body>

</html>