#include <iostream>
#include <vector>
using namespace std;

int main() {
    string nim;
    cout << "Masukkan NIM: ";
    cin >> nim;

    vector<int> digit;

    // Memecah NIM
    for (char c : nim) {
        digit.push_back(c - '0');
    }

    // Hitung total
    int total = 0;
    for (int d : digit) total += d;

    // Max dan Min
    int maksimum = digit[0];
    int minimum = digit[0];
    for (int d : digit) {
        if (d > maksimum) maksimum = d;
        if (d < minimum) minimum = d;
    }

    // Rata-rata
    float rata = (float) total / digit.size();

    // Reverse
    vector<int> rev(digit.rbegin(), digit.rend());

    // Output
    cout << "Array digit: ";
    for (int d : digit) cout << d << " ";

    cout << "\nTotal digit = " << total;
    cout << "\nDigit maksimum = " << maksimum;
    cout << "\nDigit minimum = " << minimum;
    cout << "\nRata-rata = " << rata;
    cout << "\nReverse = ";
    for (int d : rev) cout << d << " ";
}