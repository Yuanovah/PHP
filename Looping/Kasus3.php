<?php

echo "Mawar Sholeh ˚˖💐˖˚ : ";
$jumlahMawarSholeh = 0;
$mawarSholeh = [];
for ($mawar = 21; $mawar >= 10; $mawar--) {
    echo "$mawar, ";
    $jumlahMawarSholeh++;
    $mawarSholeh[] = $mawar;
}
echo "<br>Jumlah: $jumlahMawarSholeh <br><br>";

echo "Mawar Ibu 💐 : ";
$jumlahMawarIbu = 0;
$mawarIbu = [];
for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
    echo "$mawar, ";
    $jumlahMawarIbu++;
    $mawarIbu[] = $mawar;
}
echo "<br>Jumlah: $jumlahMawarIbu <br><br>";

$sisaMawar = array_diff($mawarSholeh, $mawarIbu);
$jumlahSisaMawar = count($sisaMawar);

echo "Sisa Mawar Milik Sholeh ˚˖💐˖˚ : ";
foreach ($sisaMawar as $mawar) {
    echo "$mawar, ";
}
echo "<br>Jumlah Sisa: $jumlahSisaMawar";

?>