<?php

use Produk as GlobalProduk;

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga;

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
// class disini hanya berfungsi untuk mencetak object yg saya punya
class CetakInfoProduk {
// Menerima inputan parameter untuk method ini,nanti parameternya adalah object (produk) yg sudah dibuat dibawah jadi ketika Produk nya di instance akan jadi sebuah object.nah objectnya bisa kita ambil sebagai parameter ini. lalu untuk spesifik masukan di  parameter sebuah kelasnya yaitu disini adalah class "Produk"  
    public function cetak( Produk $produk ) {
        //  kurung kurawa disini supaya tidakperlu repot repot menggabungkan string
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk( "Naruto", "Mashasi kimoto", "Shonen joump", 30000);

$produk2 = new Produk( "Gta", "Ucok", "Gatau", 5000);


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk2);

?>