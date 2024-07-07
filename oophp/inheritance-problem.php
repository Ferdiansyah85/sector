<?php

use Produk as GlobalProduk;

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktumain,
           $tipe;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktumain = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktumain = $waktumain;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getinfolengkap() {

        $str = "{$this->tipe} : {$this->judul}  | {$this->getLabel()} (Rp. {$this->harga})";
        if( $this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if( $this->tipe == "Game") {
            $str .= " - {$this->waktumain} Jam.";
        }

        return $str;
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




$produk1 = new Produk( "Naruto", "Mashasi kimoto", "Shonen joump", 30000, 100, 0, "Komik");

$produk2 = new Produk( "Gta", "Ucok", "Gatau", 5000, 0, 50, "Game");


echo $produk1->getinfolengkap();
echo "<br>";
echo $produk2->getinfolengkap();




?>