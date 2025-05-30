<h1>Jadwal Kegiatan Andi</h1>

<?php
date_default_timezone_set("Asia/Jakarta");

$nama_anda = "Yuanova Helga";
$nama_partner = "Zahira Shofa";
echo "<p>Dibuat oleh: $nama_anda dan $nama_partner</p>";

$jam_sekarang = date("19:11:00");
echo "<p><strong>Jam Sekarang:</strong> $jam_sekarang</p>";

$adaTugas = true;
$bercengkrama_dimajukan = false;

$jadwal_keseharian = [
    "04:00:00 - 06:10:00" => "Sholat Subuh dan Mengaji",
    "07:00:00 - 15:30:00" => "Masih di Sekolah",
    "15:30:00 - 15:45:00" => "Perjalanan pulang dari sekolah ke rumah",
    "15:45:00 - 16:15:00" => "Membeli bumbu",
    "16:15:00 - 16:30:00" => "Mandi",
    "16:30:00 - 17:00:00" => "Mengaji",
    "17:00:00 - 17:30:00" => "Chatting dengan Raya",
    "17:30:00 - 18:00:00" => "Menghafalkan dialog",
    "18:00:00 - 18:10:00" => "Sholat Maghrib",
    "18:10:00 - 18:40:00" => "Makan malam bersama keluarga",
    "18:40:00 - 19:00:00" => "Waktu Luang",
    "19:00:00 - 19:10:00" => "Sholat Isya",
];

if ($adaTugas) {
    // Tambahkan versi default
    $jadwal_keseharian["19:10:00 - 21:10:00"] = "Mengerjakan tugas sekolah";
    $jadwal_keseharian["21:10:00 - 21:40:00"] = "Mengobrol bersama keluarga";
    $jadwal_keseharian["21:40:00 - 22:00:00"] = "Waktu luang";

    echo "<p><strong>Catatan:</strong> Permintaan waktu ngobrol dimajukan ditolak</p>";

    if ($bercengkrama_dimajukan) {
        // Hapus versi default (PENTING!)
        unset($jadwal_keseharian["19:10:00 - 21:10:00"]);
        unset($jadwal_keseharian["21:10:00 - 21:40:00"]);
        unset($jadwal_keseharian["21:40:00 - 22:00:00"]);

        // Tambahkan versi jika dimajukan
        $jadwal_keseharian["19:10:00 - 19:40:00"] = "Mengobrol bersama keluarga";
        $jadwal_keseharian["19:40:00 - 22:00:00"] = "Waktu luang";

    } else {
        // Hapus versi default (PENTING!)
        unset($jadwal_keseharian["19:10:00 - 21:10:00"]);
        unset($jadwal_keseharian["21:10:00 - 21:40:00"]);
        unset($jadwal_keseharian["21:40:00 - 22:00:00"]);

        // Tambahkan versi jika tidak dimajukan
        $jadwal_keseharian["19:10:00 - 21:30:00"] = "Waktu luang";
        $jadwal_keseharian["21:30:00 - 22:00:00"] = "Mengobrol bersama keluarga";
    }
} else {
    echo "<p><strong>YESSSSSSSSSS!</strong> Tidak ada tugas, YEY 🎉</p>";
}


// Tambahkan jadwal tidur cross-midnight
$jadwal_keseharian["22:00:00 - 23:59:59"] = "Tidur";
$jadwal_keseharian["00:00:00 - 04:00:00"] = "Tidur";

echo "<ul>";
foreach ($jadwal_keseharian as $waktu => $kegiatan) {
    echo "<li>$waktu - $kegiatan</li>";
}
echo "</ul>";

// Cek validitas waktu
$jam_parts = explode(":", $jam_sekarang);
if ((int)$jam_parts[0] >= 25) {
    echo "<p><strong>Peringatan:</strong> SAYA BUKAN DARI PLANET LAIN YAH!🥹</p>";
    exit;
}

$kegiatan_sekarang = "Tidak ada kegiatan saat ini";
$kegiatan_selanjutnya = "Tidak ada kegiatan berikutnya";

// Konversi jam ke detik untuk perbandingan lebih akurat
function waktu_ke_detik($waktu) {
    list($jam, $menit, $detik) = explode(":", $waktu);
    return $jam * 3600 + $menit * 60 + $detik;
}

$sekarang_detik = waktu_ke_detik($jam_sekarang);

foreach ($jadwal_keseharian as $rentang => $kegiatan) {
    list($mulai, $selesai) = explode(" - ", $rentang);
    $mulai_detik = waktu_ke_detik($mulai);
    $selesai_detik = waktu_ke_detik($selesai);

    if ($mulai_detik <= $sekarang_detik && $sekarang_detik <= $selesai_detik) {
        $kegiatan_sekarang = $kegiatan;
    } elseif ($sekarang_detik < $mulai_detik && $kegiatan_selanjutnya == "Tidak ada kegiatan berikutnya") {
        $kegiatan_selanjutnya = $kegiatan;
    }
}

echo "<p><strong>Sedang Berlangsung:</strong> <span class='highlight'>$kegiatan_sekarang</span></p>";
echo "<p><strong>Selanjutnya:</strong> $kegiatan_selanjutnya</p>";
?>
