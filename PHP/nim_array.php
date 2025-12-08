<?php
$nim = readline("Masukkan NIM: ");
$digits = [];

for ($i = 0; $i < strlen($nim); $i++) {
    $digits[] = intval($nim[$i]);
}

$total = array_sum($digits);
$max = max($digits);
$min = min($digits);
$rata = $total / count($digits);
$reverse = array_reverse($digits);

echo "Array digit: " . implode(", ", $digits) . PHP_EOL;
echo "Total digit = $total\n";
echo "Digit maksimum = $max\n";
echo "Digit minimum = $min\n";
echo "Rata-rata = $rata\n";
echo "Reverse = " . implode(", ", $reverse) . PHP_EOL;
?>
