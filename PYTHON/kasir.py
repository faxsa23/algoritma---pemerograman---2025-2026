import tkinter as tk
from tkinter import ttk, messagebox

class KasirUMKM:
    def __init__(self, root):
        self.root = root
        self.root.title("SISTEM KASIR TOKO UMKM")
        self.root.geometry("1100x700")
        self.root.configure(bg="#f4f4f4")

        # --- HEADER ---
        header = tk.Frame(self.root, bg="#2c3e50", height=80)
        header.pack(fill="x")
        
        tk.Label(header, text="SISTEM KASIR TOKO UMKM", font=("Arial", 20, "bold"), fg="white", bg="#2c3e50").pack(pady=(10,0))
        tk.Label(header, text="Warung Berkah Jaya - Jl. Raya Pabuaran No. 123, Bogor", font=("Arial", 10), fg="#bdc3c7", bg="#2c3e50").pack()

        # --- MAIN CONTAINER ---
        main_frame = tk.Frame(self.root, bg="#f4f4f4")
        main_frame.pack(fill="both", expand=True, padx=10, pady=10)

        # 1. FORM INPUT BARANG (Agar data bisa diisi saat run)
        form_frame = tk.LabelFrame(main_frame, text=" Input Data Produk Baru ", bg="white", font=("Arial", 10, "bold"))
        form_frame.pack(fill="x", pady=(0, 10))

        fields = ["ID", "Nama Produk", "Kategori", "Harga", "Stok"]
        self.entries = {}
        for i, field in enumerate(fields):
            tk.Label(form_frame, text=field, bg="white").grid(row=0, column=i*2, padx=5, pady=10)
            entry = tk.Entry(form_frame, width=15)
            entry.grid(row=0, column=i*2+1, padx=5)
            self.entries[field] = entry

        btn_save = tk.Button(form_frame, text="Simpan ke Katalog", bg="#3498db", fg="white", command=self.simpan_produk)
        btn_save.grid(row=0, column=10, padx=20)

        # --- BAGIAN TENGAH (KATALOG & KERANJANG) ---
        content_frame = tk.Frame(main_frame, bg="#f4f4f4")
        content_frame.pack(fill="both", expand=True)

        # KATALOG PRODUK (KIRI)
        katalog_frame = tk.LabelFrame(content_frame, text=" KATALOG PRODUK ", bg="white", font=("Arial", 10, "bold"))
        katalog_frame.place(relx=0, rely=0, relwidth=0.48, relheight=1)

        self.tree_katalog = ttk.Treeview(katalog_frame, columns=fields, show="headings")
        for f in fields:
            self.tree_katalog.heading(f, text=f)
            self.tree_katalog.column(f, width=80)
        self.tree_katalog.pack(fill="both", expand=True, padx=5, pady=5)

        # Tombol Tambah ke Keranjang
        input_beli_frame = tk.Frame(katalog_frame, bg="white")
        input_beli_frame.pack(fill="x", pady=5)
        tk.Label(input_beli_frame, text="Jumlah Beli:", bg="white").pack(side="left", padx=5)
        self.ent_qty = tk.Entry(input_beli_frame, width=10)
        self.ent_qty.pack(side="left", padx=5)
        self.ent_qty.insert(0, "1")
        tk.Button(input_beli_frame, text="+ Tambah ke Keranjang", bg="#27ae60", fg="white", command=self.tambah_keranjang).pack(side="left", padx=5)

        # KERANJANG BELANJA (KANAN)
        cart_frame = tk.LabelFrame(content_frame, text=" KERANJANG BELANJA ", bg="white", font=("Arial", 10, "bold"))
        cart_frame.place(relx=0.52, rely=0, relwidth=0.48, relheight=1)

        cart_cols = ("No", "Nama", "Harga", "Qty", "Subtotal")
        self.tree_cart = ttk.Treeview(cart_frame, columns=cart_cols, show="headings")
        for c in cart_cols:
            self.tree_cart.heading(c, text=c)
            self.tree_cart.column(c, width=70)
        self.tree_cart.pack(fill="both", expand=True, padx=5, pady=5)

        # --- FOOTER TOTAL ---
        self.lbl_total = tk.Label(cart_frame, text="TOTAL BAYAR: Rp 0", font=("Arial", 16, "bold"), fg="#e74c3c", bg="white")
        self.lbl_total.pack(pady=10)
        tk.Button(cart_frame, text="PROSES PEMBAYARAN", bg="#2980b9", fg="white", font=("Arial", 12, "bold"), height=2, command=self.bayar).pack(fill="x", padx=10, pady=5)

        self.list_belanja = []

    def simpan_produk(self):
        vals = [self.entries[f].get() for f in self.entries]
        if "" in vals:
            messagebox.showwarning("Gagal", "Semua kolom input produk harus diisi!")
            return
        self.tree_katalog.insert("", "end", values=vals)
        for f in self.entries: self.entries[f].delete(0, tk.END)

    def tambah_keranjang(self):
        sel = self.tree_katalog.selection()
        if not sel: return
        
        item = self.tree_katalog.item(sel)['values']
        try:
            qty = int(self.ent_qty.get())
            harga = int(item[3])
            subtotal = qty * harga
            
            no = len(self.list_belanja) + 1
            self.tree_cart.insert("", "end", values=(no, item[1], harga, qty, subtotal))
            self.list_belanja.append(subtotal)
            self.lbl_total.config(text=f"TOTAL BAYAR: Rp {sum(self.list_belanja):,}")
        except:
            messagebox.showerror("Error", "Pastikan Harga dan Jumlah berupa angka!")

    def bayar(self):
        if not self.list_belanja: return
        messagebox.showinfo("Sukses", f"Total Bayar: Rp {sum(self.list_belanja):,}\nTerima kasih!")
        for i in self.tree_cart.get_children(): self.tree_cart.delete(i)
        self.list_belanja = []
        self.lbl_total.config(text="TOTAL BAYAR: Rp 0")

if __name__ == "__main__":
    root = tk.Tk()
    app = KasirUMKM(root)
    root.mainloop()