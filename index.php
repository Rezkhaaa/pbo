
<?php

class Produk {
    // Property
    public $kode;
    public $nama;
    public $harga;
    public $stok;

    // Constant
    const PAJAK = 0.11;

    // Constructor
    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // Method menghitung harga setelah pajak
    public function hitungHargaPajak() {
        return $this->harga + ($this->harga * self::PAJAK);
    }

    // Static method menghitung pajak
    public static function hitungPajak($harga) {
        return $harga * self::PAJAK;
    }

    // Method menampilkan informasi produk
    public function tampilkanProduk() {
        echo "Kode Produk: " . $this->kode . "<br>";
        echo "Nama Produk: " . $this->nama . "<br>";
        echo "Harga: Rp" .
            number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Stok: " . $this->stok . "<br>";
        echo "Pajak: " . (self::PAJAK * 100) . "%<br>";

        echo "Nominal Pajak: Rp" .
            number_format(
                self::hitungPajak($this->harga),
                0, ',', '.'
            ) . "<br>";

        echo "Total harga setelah pajak: Rp" .
            number_format(
                $this->hitungHargaPajak(),
                0, ',', '.'
            ) . "<br>";
    }
}

// Membuat objek produk
$produk1 = new Produk("P001", "Laptop", 10000000, 5);

// Memanggil method
$produk1->tampilkanProduk();

// Memanggil static method melalui nama class
echo "<br>Contoh pemanggilan static method:<br>";
echo "Pajak: Rp" .
    number_format(Produk::hitungPajak(10000000), 0, ',', '.');

?>

