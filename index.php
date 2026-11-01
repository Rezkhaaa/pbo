
<?php

// Memanggil file class Produk
require_once __DIR__ . '/Produk/produk.php';

// Menggunakan namespace dan class Produk
use Toko\Produk\Produk;

// Membuat objek menggunakan constructor
$produk1 = new Produk("P001", "Laptop", 10000000, 5);

// Memanggil method
$produk1->tampilkanProduk();

// Memanggil static method
echo "<br>Contoh pemanggilan static method:<br>";

echo "Pajak: Rp" .
    number_format(Produk::hitungPajak(10000000), 0, ',', '.');

// Menghapus objek secara eksplisit
unset($produk1);

?>
