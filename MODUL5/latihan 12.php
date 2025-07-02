<?php

/**
 * Fungsi untuk menampilkan pesan sapaan.
 *
 * @param string $nama Nama orang yang akan disapa.
 * @param string $waktu Waktu (misalnya "Pagi", "Siang", "Sore", "Malam").
 * @return void
 */
function sapa($nama, $waktu) {
    echo "Selamat " . $waktu . ", " . $nama . "!";
}

// Contoh penggunaan fungsi:
sapa("Budi", "Pagi"); // Akan menampilkan: Selamat Pagi, Budi!
echo "<br>"; // Untuk baris baru

sapa("Siti", "Siang"); // Akan menampilkan: Selamat Siang, Siti!
echo "<br>";

sapa("Andi", "Malam"); // Akan menampilkan: Selamat Malam, Andi!

?>