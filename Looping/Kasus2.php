<?php
$jumlahAnakAyam = 30;

echo "Tek kotek kotek kotek." . "<br>";
echo "Anak ayam turun berkotek." . "<br>";

echo "<br>";
for ($i = $jumlahAnakAyam; $i >= 1; $i--) {
    if ($i > 1) {
        echo "Anak ayam turunlah " . $i . ", 🐣 mati satu tinggallah " . ($i - 1) . "<br>";
    } else {
        echo "Anak ayam turunlah 1, mati 1 tinggal induknya  🐓  <br>";
    }
}
echo "<br>";
echo "<hr>";
echo "<br>";
$anak_ayam = range(30, 1);

foreach ($anak_ayam as $jumlah) {
    if ($jumlah == 1) {
        echo "Anak ayam turun $jumlah, mati satu tinggal induknya.<br>";
    } else {
        $sisa = $jumlah - 1;
        echo "Anak ayam turun $jumlah, mati satu tinggal $sisa.<br>";
    }
}

?>

