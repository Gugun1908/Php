<?php
include "koneksi.php";
$id_barang = $_GET['n'];
$q = "select * from barang where id_barang='$id_barang'";
$ex = mysqli_query($koneksi, $q);
$r = mysqli_fetch_array($ex);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Barang</title>
    <style>
        form {
            width: 80%;
            margin-top: 20px;
        }

        input[type="text"],
        input[type="number"] {
            padding: 5px;
            margin: 5px 0;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #0D4A88;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0D4A88;
        }

        a {
            display: inline-block;
            font-size: 7.5px;
            text-decoration: none;
            background-color: #0D4A88;
            color: #fff;
            padding: 8px 12px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <h1>Edit Data Barang</h1>
    <form action="#" method="post">
        ID Barang : <input type="text" name="id_barang" value="<?php echo $r['id_barang']; ?>" /> <br />
        Nama Barang : <input type="text" name="nama_barang" value="<?php echo $r['nama_barang']; ?>" /><br />
        Keterangan : <input type="text" name="ket" value="<?php echo $r['ket']; ?>" /><br />
        Jumlah : <input type="text" name="jml" value="<?php echo $r['jml']; ?>" /><br />
        <input type="submit" name="BOK" value="SIMPAN" />
        <a href="menampilkan.php"> KEMBALI</a>

    </form>

    <?php
    if (isset($_POST['BOK'])) {
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $ket = $_POST['ket'];
        $jml = $_POST['jml'];

        $q = "update  barang SET nama_barang = '$nama_barang',
    ket = '$ket',
    jml = '$jml'";
        $q .= " WHERE id_barang = '$id_barang'";
        mysqli_query($koneksi, $q);
        echo "Data Tersimpan";
    }
    ?>