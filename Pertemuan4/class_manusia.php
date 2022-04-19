<?php
// Membuat nilai class manusia
class Manusia{
    // Buat Property
    var $nama;
    var $warna;

    // buat method atau function
    function tampilkan_nama(){
        return 'Nama Saya adalah Amirul';
    }

    function warna_kulit(){
        return '<br/>Kulit saya bewarna coklat';
    }
}
// buat object
$orang = new Manusia();

echo $orang -> tampilkan_nama();
echo $orang -> warna_kulit();
?>