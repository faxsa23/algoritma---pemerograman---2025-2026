#include <iostream>
using namespace std;
int main() {
    int nilai;
    cout << "Masukkan nilai ujian (0-100): ";
    cin >> nilai;
    if (nilai >= 80) {
        cout << "Selamat! Nilai Anda A (Istimewa)" << endl;
    } else if (nilai >= 70) {
        cout << "Bagus! Nilai Anda B (Baik)" << endl;
    } else if (nilai >= 60) {
        cout << "Cukup! Nilai Anda C (Cukup)" << endl;
    } else {
        cout << "Maaf, Anda perlu belajar lebih giat. Nilai D (Kurang)" << endl;
    }
    return 0;
}