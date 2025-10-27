<?php
$a = readline("Masukkan angka pertama: ");
$b = readline("masukkan angka kedua: ");

if ($a > $b) {
    echo "$a lebih besar dari $b\n";
} elseif ($a < $b) {
    echo "$a lebih kecil dari $b\n";
} else {
    echo "Kedua sama besar\n";
    echo "apakah keduanya sama?";
    echo ($a == $b) ? " true\n" : " false\n";
}
?>