<?php

use Produk as GlobalProduk;

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga;

    // construct method adalah Metode khusus yg akan dijalankan secara otomatis setiap kita membuat instance dari sebuah kelas, biasanya koneksi ke databse disimpan didalam constructor method 
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}


$produk1 = new Produk( "Naruto", "Mashasi kimoto", "Shonen joump", 30000);

$produk2 = new Produk( "Gta", "Ucok", "Gatau", 5000);

$produk3 = new Produk("DragonBall");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);

?>