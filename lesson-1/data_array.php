<?php

$nama =["joko", "yomo", "roor"];
// var_dump($nama);

$nilai =[
    60,
    70,
    80
];
// var_dump($nilai);
// echo $nama[0]. PHP_EOL;
// echo $nilai[2]. PHP_EOL;

$campur =[
    "joko",
    23,
    true
];
// echo $campur[0];
// echo $campur[1];
// echo $campur[2];

$alamat =[
    "desa" => "gegeran",
    "kecamatan" => "sukorejo",
    "kabupaten" => "ponorogo",
    5 => "indonesia"
];
// echo $alamat[5];
echo "Saya tinggal di desa $alamat[desa], kecamatan $alamat[kecamatan], kabupaten $alamat[kabupaten]";