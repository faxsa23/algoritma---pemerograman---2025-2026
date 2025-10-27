tugas=float(input("Masukkan nilai tugas: "))
uts=float(input("Masukkan nilai UTS: "))
uas=float(input("Masukkan nilai UAS: "))

nilaiakhir = (0.3 * tugas) + (0.3 * uts) + (0.4 * uas)
print("Nilai Akhir:", nilaiakhir)
if nilaiakhir >= 60:
    print("status: Lulus")
else:
    print("status: Tidak Lulus")