#include <iostream>
#include <string>
using namespace std;

int konversiSaldo(string nim) {
    return stoi(nim) * 10;
}

int main() {
    string nama, cek, nim;
    bool valid = false;

    while (!valid) {
        cout << "Masukkan Nama: ";
        getline(cin, nama);

        cout << "Apakah nama benar? (BENAR/SALAH): ";
        getline(cin, cek);

        if (cek == "BENAR" || cek == "Benar"|| cek == "benar") {
            valid = true;
        } else {
            cout << "Nama salah! Masukkan kembali.\n\n";n
        }
    }

    cout << "Masukkan NIM (angka saja): ";
    getline(cin, nim);
    int saldo = konversiSaldo(nim);

    while (true) {
        cout << "\n=== MENU ATM ===\n";
        cout << "1. Cek Saldo\n";
        cout << "2. Tarik Tunai\n";
        cout << "3. Setor Tunai\n";
        cout << "4. Keluar\n";
        cout << "Pilih menu: ";
        int pilih;
        cin >> pilih;

        switch (pilih) {
            case 1:
                cout << "Saldo Anda: " << saldo << endl;
                break;

            case 2: {
                cout << "Jumlah Tarik: ";
                int tarik;
                cin >> tarik;
                if (tarik <= saldo) {
                    saldo -= tarik;
                    cout << "Tarik berhasil! Sisa saldo: " << saldo << endl;
                } else {
                    cout << "Saldo tidak cukup!\n";
                }
                break;
            }

            case 3: {
                cout << "Jumlah Setor: ";
                int setor;
                cin >> setor;
                saldo += setor;
                cout << "Setor berhasil! Saldo sekarang: " << saldo << endl;
                break;
            }

            case 4:
                cout << "\n=== RINGKASAN AKHIR ===\n";
                cout << "Nama : " << nama << endl;
                cout << "Saldo Akhir : " << saldo << endl;
                return 0;

            default:
                cout << "Menu tidak valid!\n";
        }
    }
}
