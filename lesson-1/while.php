<?php

echo "Masukkan nilai awal : ";
$awal = fgets(STDIN);
echo "Masukkan nilai terakhir : ";
$akhir = fgets(STDIN);


while($awal <= $akhir){
    echo "Antrian ke-$awal \n";
    $awal++;
}