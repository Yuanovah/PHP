    <h1>Jadwal Kegiatan Andi</h1>

    <?php
    date_default_timezone_set("Asia/Jakarta");

    $nama_anda = "Yuanova Helga";
    $nama_partner = "Zahira Shofa";
    echo "<p>Dibuat oleh: $nama_anda dan $nama_partner</p>";

    $jam_sekarang = date("03:30:59");
    echo "<p><strong>Jam Sekarang:</strong> $jam_sekarang</p>";

    $pecah_jam = explode(":", $jam_sekarang);
    $jam = (int)$pecah_jam[0];

    if ($jam >= 25) {
    echo "<p style='color: red; font-weight: bold;'>⚠️ ANDI TIDAK DARI DUNIA LAIN ‼️</p>";
}

    $adaTugas = true;
    $bercengkrama_dimajukan = false; 

    $jadwal_keseharian = [
        "04:00:00 - 06:10:00" => "Sholat Subuh dan Mengaji",
        "06:10:01 - 06:59:59" => "Persiapan ke Sekolah / Waktu Luang",
        "07:00:00 - 15:30:00" => "Masih di Sekolah",
        "15:30:01 - 15:45:00" => "Perjalanan pulang dari sekolah ke rumah",
        "15:45:01 - 16:15:00" => "Membeli bumbu",
        "16:15:01 - 16:30:00" => "Mandi",
        "16:30:01 - 17:00:00" => "Mengaji",
        "17:00:01 - 17:30:00" => "Chatting dengan Raya",
        "17:30:01 - 18:00:00" => "Menghafalkan dialog",
        "18:00:01 - 18:10:00" => "Sholat Maghrib",
        "18:10:01 - 18:40:00" => "Makan malam bersama keluarga",
        "18:40:01 - 19:00:00" => "Waktu Luang",
        "19:00:01 - 19:10:00" => "Sholat Isya",
    ];

 if ($adaTugas) {
    unset($jadwal_keseharian["18:40 - 19:00"]); 
    $jadwal_keseharian["19:10:01 - 21:10:00"] = "Mengerjakan tugas sekolah";
    $jadwal_keseharian["21:10:01 - 21:40:00"] = "Mengobrol bersama keluarga";
    $jadwal_keseharian["21:40:01 - 22:00:00"] = "Waktu luang";
    echo "<p><strong>Catatan:</strong> Permintaan waktu ngobrol dimajukan ditolak</p>";
} else {
    $jadwal_keseharian["19:10:01 - 22:00:00"] = "Tidur lebih awal / Waktu istirahat";
    echo "<p><strong>YESSSSSSSSSS!</strong> Tidak ada tugas, YEY 🎉</p>";
}


    $jadwal_keseharian["22:00:01 - 04:00:00"] = "Tidur";

    echo "<ul>";
    foreach ($jadwal_keseharian as $waktu => $kegiatan) {
        echo "<li> $waktu - $kegiatan</li>";
    }
    echo "</ul>";

   $kegiatan_sekarang = "Tidak ada kegiatan saat ini";
   $kegiatan_selanjutnya = "Tidak ada kegiatan berikutnya";
   
    foreach ($jadwal_keseharian as $waktu => $kegiatan) {
    $rentang = explode(" - ", $waktu);
    $jam_mulai = $rentang[0];
    $jam_selesai = $rentang[1];

    if ($jam_mulai > $jam_selesai) {
        if ($jam_sekarang >= $jam_mulai || $jam_sekarang <= $jam_selesai) {
            $kegiatan_sekarang = $kegiatan;
        }
    } else {
        if ($jam_sekarang >= $jam_mulai && $jam_sekarang <= $jam_selesai) {
            $kegiatan_sekarang = $kegiatan;
        } elseif ($jam_sekarang < $jam_mulai && $kegiatan_selanjutnya == "Tidak ada kegiatan berikutnya") {
            $kegiatan_selanjutnya = $kegiatan;
        }
    }
}

    echo "<p><strong>Sedang Berlangsung:</strong> <span class='highlight'>$kegiatan_sekarang</span></p>";
    echo "<p><strong>Selanjutnya:</strong> $kegiatan_selanjutnya</p>";
    ?>

