import java.util.Scanner;

public class strukpembelian {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Masukkan nama barang: ");
        String nama = input.nextLine();

        System.out.print("Masukkan harga barang: ");
        double harga = input.nextDouble();

        System.out.print("Masukkan jumlah beli: ");
        int jumlah = input.nextInt();

        double total = harga * jumlah;
        double diskon = 0;

        if (total > 10000) {
            diskon = total * 0.010;
        }

        double total_bayar = total - diskon;

        System.out.println("\n==== STRUK PEMBELIAN ====");
        System.out.println("Nama Barang  : " + nama);
        System.out.println("Harga Satuan : " + harga);
        System.out.println("Jumlah Beli  : " + jumlah);
        System.out.println("Total Harga  : " + total);
        System.out.println("Diskon       : " + diskon);
        System.out.println("Total Bayar  : " + total_bayar);
        System.out.println("============================");

        input.close();
    }
}
