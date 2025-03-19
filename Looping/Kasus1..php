<?php
$hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat","Sabtu"];
$tanggal = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", 
"25", "26", "27", "28", "29", "30", "31");
$bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
$tahun = array ("2024", "2025", "2026");

//Senin, 10 - Mar - 2025
echo $hari[1] .", ".$tanggal[9]."-".$bulan[2]."-".$tahun[1];
echo "<br>";
//Selasa, 18 - Mar - 2025
echo $hari[2] .", ".$tanggal[17]."-".$bulan[2]."-".$tahun[1];
echo "<hr>";

// main looping nambah otomatis
for($i = 0; $i < 30; $i++) {
    echo $i;
    echo "<br>";
}

echo "<hr>";
// main looping kurang otomatis
for($i = 30; $i > 9; $i--) {
    echo $i;
    echo "<br>";
}

echo "<hr>";
// 1. hari menggunakan for,
$jum_hari = count($hari);
for ($h = 0; $h < $jum_hari; $h++ ) {
    echo $hari[$h];
    echo "<br>";
}

echo "<hr>";
// 2. tanggal menggunakan foreach,
foreach($tanggal as $tanggal) {
    echo $tanggal;
    echo "<br>";
}

echo "<hr>";
// 3. bulan menggunakan while,
$b = 0;
$jum_bulan = count($bulan);
while ($b < $jum_bulan){
    echo $bulan[$b];
    echo "<br>";
    $b++;
}

echo "<hr>";
// 4. tahun menggunakan do while
$t = 0;
$jum_tahun = count($tahun);
do {
    echo $tahun[$t];
    echo "<br>";
    $t++;
} while ($t < $jum_tahun);

?>