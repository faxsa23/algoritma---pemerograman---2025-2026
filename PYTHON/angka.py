a = int(input("Masukkan angka pertama: "))
b = int(input("Masukkan angka kedua: "))

if a > b:
    print(f"{a} lebih besar dari {b}.")
elif a < b:
    print(f"{a} lebih kecil dari {b}.")
else:
    print("Keduanya sama besar.")
    print("Apakah keduanya sama?")
    print("true" if a == b else "false")
    