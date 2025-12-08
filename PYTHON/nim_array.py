nim = input("Masukkan NIM: ")

# Memecah NIM
digits = [int(c) for c in nim]k

# Perhitungan
total = sum(digits)
maksimum = max(digits)
minimum = min(digits)
rata = total / len(digits)
reverse = digits[::-1]

print("Array digit:", digits)
print("Total digit =", total)
print("Digit maksimum =", maksimum)
print("Digit minimum =", minimum)
print("Rata-rata =", rata)
print("Reverse =", reverse)