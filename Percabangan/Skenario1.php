<html>
    <h1>Keterangan Nilai</h1>
<body>
    <?php
$nilai = 79;

        if ($nilai >= 90 && $nilai <= 100) {
            $keterangan = "A";
        } elseif ($nilai >= 80 && $nilai <= 89) {
            $keterangan = "B";
        } elseif ($nilai >= 70 && $nilai <= 79) {
            $keterangan = "C";
        } elseif ($nilai >= 0 && $nilai <= 69) {
            $keterangan = "D";
        } else {
            $keterangan = "Nilai wajib di antara 0-100";
        }

        echo "Nilai $nilai = $keterangan";

    ?>
</body>
</html>