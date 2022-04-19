<?php
// Contoh function tidak menggunakan parameter
function nama (){
    $nama = "Muhammad Amirul Mustafa";
    echo "Nama saya adalah $nama";
}
// Contoh fincction menggunakan parameter
function umur_kelas($age){
    $umur = $age-2022;
    $kelas = "TI06";
    echo "</br>Umur saya sekarang adalah $umur </br> Saya kelas $kelas";
}
nama();
umur_kelas(2001);
?>
