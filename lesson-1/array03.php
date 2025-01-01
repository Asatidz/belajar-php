<?php

// array 2 dimenso
$pegawai =[
    "nama" => "Rudi Hermanto",
    "alamat" => [
        "desa" => "Rejosari",
        "kec" => "Kebonsari",
        "kab" => "Madiun"
    ]
    ];
    // var_dump($pegawai);
    echo "Nama\t\t : " . $pegawai['nama'] . PHP_EOL;
    echo "Alamat" . PHP_EOL;
    echo "Desa\t\t : " . $pegawai['alamat']['desa'] . PHP_EOL;
    echo "Kecamatan\t : " . $pegawai['alamat']['kec'] . PHP_EOL;
    echo "kabupaten\t : " . $pegawai['alamat']['kab'] . PHP_EOL;
    echo "Pegawai {$pegawai['nama']} alamatnya adalah {$pegawai['alamat']['kab']}\n";

    $nama= "Joko";
    echo "nama saya $nama";


