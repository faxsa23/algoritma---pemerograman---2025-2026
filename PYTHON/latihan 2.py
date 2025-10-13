# Program Sederhana Nilai Siswa
# Jalankan di Python 3.x

# Input data
nama = input("Masukkan nama siswa: ")
nilai1 = float(input("Masukkan nilai Matematika: "))
nilai2 = float(input("Masukkan nilai IPA: "))
nilai3 = float(input("Masukkan nilai IPS: "))

# Hitung rata-rata
rata_rata = (nilai1 + nilai2 + nilai3) / 3

# Tentukan grade
if rata_rata >= 80:
    grade = 'A'
elif rata_rata >= 70:
    grade = 'B'
elif rata_rata >= 60:
    grade = 'C'
elif rata_rata >= 50:
    grade = 'D'
else:
    grade = 'E'

# Tampilkan hasil
print(f"\nHasil untuk {nama}:")
print(f"Nilai: {nilai1}, {nilai2}, {nilai3}")
print(f"Rata-rata: {rata_rata:.2f}")
print(f"Grade: {grade}")
