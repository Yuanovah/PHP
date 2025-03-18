<?php

echo "Playlist lagu Ambyar ˚✮🎧✮˚ : <br><br>";

$playlist = [
    "galau" => [
        "judul" => "Mesin Waktu",
        "penyanyi" => "Budi Doremi"
    ],
    "semangat" => [
        "judul" => "Selamat Pagi",
        "penyanyi" => "Ran"
    ],
    "marah" => [
        "judul" => "Yang Patah Tumbuh, yang Hilang Berganti",
        "penyanyi" => "Banda Neira"
    ]
];

foreach ($playlist as $suasana => $lagu) {
    $suasana_kapital = ucfirst($suasana);
    echo "Pada saat sedang $suasana_kapital, Ambyar mendengarkan {$lagu['judul']} ciptaan {$lagu['penyanyi']} <br><br>";
}

?>