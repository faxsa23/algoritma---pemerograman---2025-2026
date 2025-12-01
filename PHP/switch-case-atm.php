<?php

function konversiSaldo($nim) {
    return (int)$nim * 10;
}

$valid = false;
while (!$valid) {
    echo "Masukkan Nama: ";
    $nama = trim(fgets(STDIN));

    echo "Apakah nama benar? (BENAR/SALAH): ";
    $cek = trim(fgets(STDIN));

    if (strtoupper($cek) == "BENAR") {
        $valid = true;
    } else {
        echo "Nama salah! Masukkan kembali.\n\n";
    }
}

echo "Masukkan NIM (angka saja): ";
$nim = trim(fgets(STDIN));
$saldo = konversiSaldo($nim);

echo "\n=== DATA ANDA ===\n";
echo "Nama  : $nama\n";
echo "Saldo : Rp " . number_format($saldo, 0, ',', '.') . "\n";

while (true) {
    echo "\n=== MENU ATM ===\n";
    echo "1. Cek Saldo\n";
    echo "2. Tarik Tunai\n";
    echo "3. Setor Tunai\n";
    echo "4. Keluar\n";
    echo "Pilih menu: ";
    $pilih = trim(fgets(STDIN));

    switch ($pilih) {
        case 1:
            echo "Saldo Anda: Rp " . number_format($saldo, 0, ',', '.') . "\n";
            break;

        case 2:
            echo "Masukkan jumlah penarikan: ";
            $tarik = trim(fgets(STDIN));
            if ($tarik <= $saldo) {
                $saldo -= $tarik;
                echo "Tarik tunai berhasil! Sisa saldo: Rp " . number_format($saldo, 0, ',', '.') . "\n";
            } else {
                echo "Saldo tidak cukup!\n";
            }
            break;

        case 3:
            echo "Masukkan jumlah setor: ";
            $setor = trim(fgets(STDIN));
            $saldo += $setor;
            echo "Setor tunai berhasil! Saldo sekarang: Rp " . number_format($saldo, 0, ',', '.') . "\n";
            break;

        case 4:
            echo "\n=== RINGKASAN AKHIR ===\n";
            echo "Nama  : $nama\n";
            echo "Saldo Akhir : Rp " . number_format($saldo, 0, ',', '.') . "\n";
            exit;

        default:
            echo "Menu tidak valid!\n";
    }
}
?>
