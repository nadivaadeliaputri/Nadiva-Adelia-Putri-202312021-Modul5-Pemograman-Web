<?php
$kalimat = "STITEK Bontang adalah kampus IT terbaik";
echo "Panjang kalimat: " . strlen($kalimat) . "<br>";
echo "Jumlah kata: " . str_word_count($kalimat) . "<br>";
echo "Mengganti kata: " . str_replace("terbaik", "favorit", $kalimat) . "<br>"; // Menambahkan <br> agar baris baru
echo "Teks kapital: " . strtoupper($kalimat);
?>