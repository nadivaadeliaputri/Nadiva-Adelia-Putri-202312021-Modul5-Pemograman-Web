<?php

// Membuat indexed array berisi daftar nama teman sekelas
$teman_sekelas = [
    "Alice",
    "Bob",
    "Charlie",
    "Diana",
    "Eve",
    "Frank",
    "Grace"
];

echo "<h3>Daftar Nama Teman Sekelas:</h3>";
echo "<ul>"; // Memulai unordered list HTML

// Menggunakan foreach untuk menampilkan setiap elemen array
foreach ($teman_sekelas as $nama_teman) {
    echo "<li>" . $nama_teman . "</li>"; // Menampilkan setiap nama sebagai item list
}

echo "</ul>"; // Mengakhiri unordered list HTML

?>