<?php
// buat class nilai mahasiswa
class NilaiMahasiswa{
    // buat property
    public $nim;
    public $matkul;
    public $nilai;

    // buat method atau function construct, hitung nilai, prediket & grade
    function __construct($nim, $matkul, $nilai){
        // fungsi this-> memanggil method lain atau luar function
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    function hitungNilai(){
        return $this->nilai;
    }

    function kelulusan($keterangan){
        if ($keterangan > 55){
            return 'Anda Lulus';
        }else{
            return 'Anda Tidak Lulus';
        }
    }

    function grade($keterangan){
        if ($keterangan >= 85 && $keterangan <= 100){
            return 'A';
        }elseif($keterangan >= 70 && $keterangan <= 84){
            return 'B';
        }elseif($keterangan >= 56 && $keterangan <= 69){
            return 'C';
        }elseif($keterangan >= 36 && $keterangan <= 55){
            return 'D';
        }elseif($keterangan >= 10 && $keterangan <= 35){
            return 'E';
        }else{
            return 'I';
        }
    }    
}
?>
