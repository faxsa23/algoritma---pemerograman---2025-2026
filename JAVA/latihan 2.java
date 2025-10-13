package JAVA;
public import java.util.Scanner;
public class CheckNumber {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);  
        System.out.print("Masukkan angka: ");
        int angka = scanner.nextInt();  // Variabel int untuk angka bulat 
        if (angka % 2 == 0) {  // % adalah modulo (sisa bagi)
            System.out.println(angka + " adalah genap.");
        } else {
            System.out.println(angka + " adalah ganjil.");
        }
        scanner.close();
    }
}