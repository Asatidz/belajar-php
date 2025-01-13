<?php
$siswa = [
    "siswa1" =>[
        "nama" => "Nata Cuy",
        "kelas" => 12
    ],
    "siswa2" => [
        "nama" => "NAta Heriy",
        "kelas" => 9
    ]
    ];
foreach($siswa as $murid => $santri){
    echo strtoupper($murid) . PHP_EOL;
    foreach($santri as $data => $isi){
        echo ucwords($data)." : " . $isi . PHP_EOL;
    }
}
?>