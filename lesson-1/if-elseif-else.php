<?php
echo "Masukkan nilai : ";
$nilai = fgets(STDIN);

if($nilai <= 0){
    echo "Nilai : $nilai";
    echo "Maaf, Ujian Sek Leh🤬🤬";
}elseif($nilai < 60){
    echo "Nilai : $nilai\n";
    echo "Gradde : E";
}elseif($nilai <70){
    echo "Nilai : $nilai\n";
    echo "Grade : D";
}elseif($nilai < 80){
    echo "Nilai : $nilai\n";
    echo "Grade : C";
}elseif($nilai < 90){
    echo "Nilai : $nilai\n";
    echo "Grade : B"; 
}elseif($nilai <= 100){
    echo "Nilai : A";
}else{
    echo "Maaf, nilai tidak sah";
}
