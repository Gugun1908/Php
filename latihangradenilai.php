<?php
//Niai inputan
$nilai = 86;
//Kondisi jika nilai lebih dari sama dengan 85 dan kurang dari sama dengan 100 
if (($nilai >= 85) && ($nilai <=100))
{
//statment yang akan dijalankan jika nilai inputan lebih dari sama dengan 85 dan kurang dari 100
// string "A" akan mengisi variabel grade
 $grade = "A";
 // string "Good, pertahankan nilai kamu" akan mengisi variabel $info
 $info = "Good, pertahankan nilai kamu";
}
//Kondisi jika nilai lebih dari sama dengan 75 dan kurang dari 85 
elseif (($nilai >= 75) && ($nilai <85))
{
//statment yang akan dijalankan jika nilai inputan lebih dari sama dengan 75 dan kurang dari 85
// string "B" akan mengisi variabel grade
 $grade = "B";
 // output berupa string "Nilai kamu bagus, bisa ditingkatkan lagi" dari variabel $info
 $info ="Nilai kamu bagus, bisa ditingkatkan lagi";
}
//Kondisi jika nilai lebih dari sama dengan 60 dan kurang dari 75
elseif (($nilai >= 60) && ($nilai <75))
{
//statment yang akan dijalankan jika nilai inputan lebih dari sama dengan 60 dan kurang dari 75
// output berupa string "C" dari variabel grade
 $grade = "C";
 // output berupa string "Nilai kamu cukup, harus ditingkatkan lagi" dari variabel $info
 $info ="Nilai kamu cukup, harus ditingkatkan lagi";
}
//Kondisi jika nilai lebih dari sama dengan 46 dan kurang dari 59
elseif (($nilai >= 46) && ($nilai <59))
{
//statment yang akan dijalankan jika nilai inputan lebih dari sama dengan 46 dan kurang dari 59
// output berupa string "D" dari variabel grade
 $grade = "D";
 // output berupa string "Nila kamu kurang, kamu tidak lulus. Silahkan mengulang di semester depan" dari variabel $info
 $info ="Nila kamu kurang, kamu tidak lulus. Silahkan mengulang di semester depan";
}
else //jika tidak ada kondisi sebelumnya yang terpenuhi blok kode else ini akan dijalankan
{
//
//statment yang akan dijalankan jika blok kode else dijalankan
// output berupa string "E" dari variabel grade
 $grade = "E";
// output berupa string "Sangat kurang. Wajib mengulang di semester depan" dari variabel $info
 $info ="Sangat kurang. Wajib mengulang di semester depan";
}
//Output yang akan tampil dengan nilai variabel $nilai berisi dari nilai yang diinput dan variabel $grade dari statement yang dijalanan sesuai kondisi yang dipenuhi
echo "Kamu mendapatkan : $nilai, dengan grade '$grade' ";
echo "<br>";//baris baru
echo $info;//menampilkan variabel $info dari statement yang dijalanan sesuai kondisi yang dipenuhi
?>