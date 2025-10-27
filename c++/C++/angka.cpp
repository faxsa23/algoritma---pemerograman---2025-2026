#include <iostream>
using namespace std;

int main() {
    int a,b;
    cout << "Masukkan angka pertama: ";
    cin >> a;
    cout << "Masukkan angka kedua: ";
    cin >> b;

    if (a>b) {
        cout << a << " lebih besar dari " << b << "." << endl;
    } else if (a<b) {
        cout << a << " lebih kecil dari " << b << "." << endl;
    } else {
        cout << "Kedua angka sama besar: " << endl;

        cout <<"apakah keduanya sama? "<< (a==b) << endl;
    }
}