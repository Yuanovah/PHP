<html>
    <h1>Keterangan Waktu</h1>
<body>
    <?php
$waktu = "10:00";
    if ($waktu >= "00:00:00" && $waktu < "04:00:00") {
        $ket = "Dini Hari";
    } elseif ($waktu >= "04:00:00" && $waktu < "10:00:00") {
        $ket = "Pagi";
    } elseif ($waktu >= "10:00:00" && $waktu < "15:00:00") {
        $ket = "Siang";
    } elseif ($waktu >= "15:00:00" && $waktu < "17:30:00") {
        $ket = "Sore";
    } elseif ($waktu >= "17:30:00" && $waktu <= "18:30:00") {
        $ket = "Petang";
    } elseif ($waktu >= "18:30:00" && $waktu <= "24:00:00") {
        $ket = "Malam";
    } else {
        $ket = "Dunia lain";
    }

echo "Waktu $waktu = $ket";

?>