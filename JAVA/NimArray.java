import java.util.*;

public class NimArray {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.print("Masukkan NIM: ");
        String nim = sc.next();

        ArrayList<Integer> digits = new ArrayList<>();

        // Memecah NIM
        for (char c : nim.toCharArray()) {
            digits.add(c - '0');
        }

        // Perhitungan
        int total = 0;
        for (int d : digits) total += d;

        int maksimum = Collections.max(digits);
        int minimum = Collections.min(digits);
        double rata = (double) total / digits.size();

        ArrayList<Integer> reverse = new ArrayList<>(digits);
        Collections.reverse(reverse);

        System.out.println("Array digit: " + digits);
        System.out.println("Total digit = " + total);
        System.out.println("Digit maksimum = " + maksimum);
        System.out.println("Digit minimum = " + minimum);
        System.out.println("Rata-rata = " + rata);
        System.out.println("Reverse = " + reverse);
    }
}
