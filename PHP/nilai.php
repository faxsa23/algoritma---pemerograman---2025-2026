<?php
$tugas = readline("masukan nilai tugas: ");
$uts = readline("masukan nilai UTS: ");
$uas = readline("masukan nilai UAS: ");

$nilaiakhir = (0.3 * $tugas) + (0.3 * $uts) + (0.4 * $uas);
echo "Nilai Akhir: " . $nilaiakhir . "\n";
if ($nilaiakhir >= 60) {
    echo "status: Lulus\n";
} else {
    echo "status: Tidak Lulus\n";
}
?>