<!DOCTYPE html>
<html>
<head>
    <title>Variabel PHP - Modifikasi</title>
</head>
<body>
    <?php
    // Deklarasi variabel (sudah dimodifikasi)
    $nama = "Muhammad Aufa";
    $umur = 18;
    $tinggi = 169; // Integer, bisa diubah ke 169.0 jika ingin float
    // Operasi sederhana
    $total = $umur + 5;
    // Output
    echo "<h2>Halo, " . $nama . "!</h2>";
    echo "Umur Anda: " . $umur . " tahun<br>";
    echo "Tinggi: " . $tinggi . " cm<br>";
    echo "Umur 5 tahun lagi: " . $total . " tahun";
    ?>
</body>
</html>
