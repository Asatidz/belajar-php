<?php

echo "Masukkan Kode Rahasia : ";
$kode = fgets(STDIN);

switch($kode){
    case 1:
        echo "Selamat dattang Admin";
        break;
    case 2:
        echo "Selamat datang User";
        break;
    case 3:
        echo "Selamat datang Tamu";
        break;
    default:
        echo "Maaf, Kamu Penyusup Njay..!";
        break;
}