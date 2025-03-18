<?php

$hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
$tanggal = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31);
$bulan = array("Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des");
$tahun = array(2024, 2025, 2026);

$hari_yang_dicari = "Senin";
for ($i = 0; $i < count($hari); $i++) {
    if ($hari[$i] == $hari_yang_dicari) {
        $hasil_hari = $hari[$i];
        break;
    }
}

$tanggal_yang_dicari = 16;
foreach ($tanggal as $tgl) {
    if ($tgl == $tanggal_yang_dicari) {
        $hasil_tanggal = $tgl;
        break;
    }
}

$bulan_yang_dicari = "Mar";
$i = 0;
while ($i < count($bulan)) {
    if ($bulan[$i] == $bulan_yang_dicari) {
        $hasil_bulan = $bulan[$i];
        break;
    }
    $i++;
}

$tahun_yang_dicari = 2025;
$i = 0;
do {
    if ($tahun[$i] == $tahun_yang_dicari) {
        $hasil_tahun = $tahun[$i];
        break;
    }
    $i++;
} while ($i < count($tahun));

echo $hasil_hari . ", " . $hasil_tanggal . "-" . $hasil_bulan . "-" . $hasil_tahun;
?>