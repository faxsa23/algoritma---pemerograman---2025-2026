import java.util.Scanner;

public class main{ 
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.print("Masukkan angka pertama: ");
        int angka1 = sc.nextInt();
        System.out.print("Masukkan angka kedua: ");
        int angka2 = sc.nextInt();

        if(angka1 > angka2)
        {
            System.out.println(angka1 + " lebih besar dari " + angka2);
        }
        else if(angka1 < angka2)
        {
            System.out.println(angka1 + " lebih kecil dari " + angka2);
        }
        else
        {
            System.out.println("Apakah keduanya sama? " + (angka1 == angka2));
        }