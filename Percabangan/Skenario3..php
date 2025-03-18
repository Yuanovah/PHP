    <h1>Jadwal Kegiatan Andi</h1>

    <?php
    date_default_timezone_set("Asia/Jakarta");

    $nama_anda = "Yuanova Helga";
    $nama_partner = "Zahira Shofa";
    echo "<p>Dibuat oleh: $nama_anda dan $nama_partner</p>";

    $jam_sekarang = date("06:06");
    echo "<p><strong>Jam Sekarang:</strong> $jam_sekarang</p>";

    $adaTugas = true;
    $bercengkrama_dimajukan = false; 

    $jadwal_keseharian = [
        "04:00 - 06:10" => "Sholat Subuh dan Mengaji",
        "07:00 - 15:30" => "Masih di Sekolah",
        "15:30 - 15:45" => "Perjalanan pulang dari sekolah ke rumah",
        "15:45 - 16:15" => "Membeli bumbu",
        "16:15 - 16:30" => "Mandi",
        "16:30 - 17:00" => "Mengaji",
        "17:00 - 17:30" => "Chatting dengan Raya",
        "17:30 - 18:00" => "Menghafalkan dialog",
        "18:00 - 18:10" => "Sholat Maghrib",
        "18:10 - 18:40" => "Makan malam bersama keluarga",
        "18:40 - 19:00" => "Waktu Luang",
        "19:00 - 19:10" => "Sholat Isya",
    ];

    if ($adaTugas) {
        $jadwal_keseharian["19:10 - 21:10"] = "Mengerjakan tugas sekolah";
        $jadwal_keseharian["21:10 - 21:40"] = "Mengobrol bersama keluarga";
        $jadwal_keseharian["21:40 - 22:00"] = "Waktu luang";
        echo "<p><strong>Catatan:</strong> Permintaan waktu ngobrol dimajukan ditolak</p>";
        if ($bercengkrama_dimajukan) {
            $jadwal_keseharian["19:10 - 19:40"] = "Mengobrol bersama keluarga";
            $jadwal_keseharian["19:40 - 22:00"] = "Waktu luang";
        } else {
            $jadwal_keseharian["19:10 - 21:30"] = "Waktu luang";
            $jadwal_keseharian["21:30 - 22:00"] = "Mengobrol bersama keluarga";
        }
        echo "<p><strong>YESSSSSSSSSS!</strong> Tidak ada tugas, YEY 🎉</p>";
    }

    $jadwal_keseharian["22:00 - 04:00"] = "Tidur";

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

        if ($jam_sekarang >= $jam_mulai && $jam_sekarang <= $jam_selesai) {
            $kegiatan_sekarang = $kegiatan;
        } elseif ($jam_sekarang < $jam_mulai && $kegiatan_selanjutnya == "Tidak ada kegiatan berikutnya") {
            $kegiatan_selanjutnya = $kegiatan;
        }
    }

    echo "<p><strong>Sedang Berlangsung:</strong> <span class='highlight'>$kegiatan_sekarang</span></p>";
    echo "<p><strong>Selanjutnya:</strong> $kegiatan_selanjutnya</p>";
    ?>

