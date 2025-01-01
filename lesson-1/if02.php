<?php

$nama = "Joko";
$nilai = 60;

if($nilai >= 80){
    echo "Selamat $nama,";
    echo "Anda dinyatakan lulus...!";
}

if($nilai < 80){
    echo "Maaf $nama,";
    echo "Anda dinyatakan belum lulus...!";
}