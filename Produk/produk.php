<?php

namespace Toko\Produk;

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

    // Destructor
    public function __destruct() {
        echo "<br>Objek produk " . $this->nama . " telah dihapus.";
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
