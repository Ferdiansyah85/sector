<?php

use Produk as GlobalProduk;

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktumain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktumain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktumain = $waktumain;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getinfoProduk() {

        $str = "{$this->tipe} : {$this->judul}  | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class Komik extends Produk {
    public function getinfoProduk() {
        $str = "Komik : {$this->judul}  | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
        return $str;
    }
}


class Game extends Produk {
    public function getinfoProduk() {
        $str = "Game : {$this->judul}  | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktumain} Jam.";
        return $str;
    }
}




class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}




$produk1 = new Komik( "Naruto", "Mashasi kimoto", "Shonen joump", 30000, 100, 0);

$produk2 = new Game( "Gta", "Ucok", "Gatau", 5000, 0, 50);


echo $produk1->getinfoProduk();
echo "<br>";
echo $produk2->getinfoProduk();




?>