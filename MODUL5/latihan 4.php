<?php
// Tipe Data String
$nama = "Budi Santoso";
echo "<h2>Variabel \$nama (String):</h2>";
var_dump($nama);
echo "<br>";

// Tipe Data Integer
$umur = 30;
echo "<h2>Variabel \$umur (Integer):</h2>";
var_dump($umur);
echo "<br>";

// Tipe Data Float (Floating Point Number / Double)
$tinggi = 175.5;
echo "<h2>Variabel \$tinggi (Float):</h2>";
var_dump($tinggi);
echo "<br>";

// Tipe Data Boolean
$menikah = true; // Bisa juga false
echo "<h2>Variabel \$menikah (Boolean):</h2>";
var_dump($menikah);
echo "<br>";

// Tipe Data Array
$hobi = ["Membaca", "Bersepeda", "Memasak"];
echo "<h2>Variabel \$hobi (Array):</h2>";
var_dump($hobi);
echo "<br>";

// Tipe Data Null
$alamat = null;
echo "<h2>Variabel \$alamat (Null):</h2>";
var_dump($alamat);
echo "<br>";

// Tipe Data Object (contoh sederhana)
class Orang {
    public $nama_depan;
    public $nama_belakang;

    public function __construct($depan, $belakang) {
        $this->nama_depan = $depan;
        $this->nama_belakang = $belakang;
    }
}
$orang1 = new Orang("Siti", "Aminah");
echo "<h2>Variabel \$orang1 (Object):</h2>";
var_dump($orang1);
echo "<br>";
?>