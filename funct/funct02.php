<?php
echo "MAsukkan Apa Saja : ";
$nami = trim(fgets(STDIN));
function sapa($nami){
    echo "Selamat Pagi Dunia $nami".PHP_EOL;
}
sapa("Tipu-tipu 😛");
sapa("Baruhh 😛");
?>