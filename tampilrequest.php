<?php 
$nama = $_REQUEST['nama'];
$jk = $_REQUEST['jk'];
$no = $_REQUEST['no'];
$alamat = $_REQUEST['alamat'];
 
// menampilkan data nama
echo "Nama          : " . $nama;
echo "<br/>";
echo "Jenis Kelamin :" . $jk;
echo "<br/>";
echo "No. Hp        : " . $no;
echo "<br/>";
echo "Alamat        :" . $alamat;
echo "<br/>";
?>