import java.util.Scanner;

public class Atm {
    public static int konversiSaldo(String nim) {
        return Integer.parseInt(nim) * 10;
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        boolean valid = false;
        String nama;

        while (!valid) {
            System.out.print("Masukkan Nama: ");
            nama = sc.nextLine();

            System.out.print("Apakah Nama benar? (BENAR/SALAH): ");
            String cek = sc.nextLine();

            if (cek.equalsIgnoreCase("BENAR")) {
                valid = true;
            } else {
                System.out.println("Nama salah, masukkan lagi!\n");
            }
        }

        System.out.print("Masukkan NIM: ");
        String nim = sc.nextLine();
        int saldo = konversiSaldo(nim);

        while (true) {
            System.out.println("\n=== MENU ATM ===");
            System.out.println("1. Cek Saldo");
            System.out.println("2. Tarik Tunai");
            System.out.println("3. Setor Tunai");
            System.out.println("4. Keluar");
            System.out.print("Pilih menu: ");
            int pilih = sc.nextInt();

            switch (pilih) {
                case 1:
                    System.out.println("Saldo Anda: " + saldo);
                    break;

                case 2:
                    System.out.print("Jumlah Tarik: ");
                    int tarik = sc.nextInt();
                    if (tarik <= saldo) {
                        saldo -= tarik;
                        System.out.println("Tarik tunai berhasil! Sisa saldo: " + saldo);
                    } else {
                        System.out.println("Saldo tidak cukup!");
                    }
                    break;

                case 3:
                    System.out.print("Jumlah Setor: ");
                    int setor = sc.nextInt();
                    saldo += setor;
                    System.out.println("Setor berhasil! Saldo sekarang: " + saldo);
                    break;

                case 4:
                    System.out.println("\n=== RINGKASAN AKHIR ===");
                    System.out.println("Nama : " + nama);
                    System.out.println("Saldo Akhir : " + saldo);
                    System.exit(0);

                default:
                    System.out.println("Menu tidak valid!");
            }
        }
    }
}
