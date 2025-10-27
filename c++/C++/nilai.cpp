#include <iostream>
using namespace std;

int main() {
    float tugas,uts,uas,nilaiakhir;

    cout << "Masukkan nilai tugas: ";
    cin >> tugas;
    cout << "Masukkan nilai UTS: ";
    cin >> uts;
    cout << "Masukkan nilai UAS: ";
    cin >> uas;

    nilaiakhir = (0.3 * tugas) + (0.3 * uts) + (0.4 * uas);
    cout << "Nilai Akhir: " << nilaiakhir << endl;
    if(nilaiakhir>=60)
    cout << "status: Lulus" << endl;
    else
    cout << "status: Tidak Lulus" << endl;
    return 0;
}