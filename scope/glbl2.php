<?php
$nama="Teh Yung \n";
$nilai=80; //global

 function tampilnilai(){
    global $nama, $nilai; //local
    echo $nama . $nilai;
 }

 tampilnilai();
?>