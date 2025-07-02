<?php
$ukuran_baju = "M"; // Anda bisa mengubah nilai ini ("S", "M", "L", "XL") untuk menguji kasus yang berbeda

switch ($ukuran_baju) {
    case "S":
        echo "Anda memilih ukuran Small (S).";
        break;
    case "M":
        echo "Anda memilih ukuran Medium (M).";
        break;
    case "L":
        echo "Anda memilih ukuran Large (L).";
        break;
    case "XL":
        echo "Anda memilih ukuran Extra Large (XL).";
        break;
    default:
        echo "Ukuran baju tidak valid. Mohon pilih S, M, L, atau XL.";
}
?>