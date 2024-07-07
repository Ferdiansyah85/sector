<?php

use Produk as GlobalProduk;

class Produk {
    private $judul, 
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;


    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    public function setJudul( $judul ) {
        // if( !is_string($judul) ) {
        //     throw new Exception("Judul harus string");
        // }
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setDiskon( $diskon) {
        return $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga  - ( $this->harga * $this->diskon / 100);
    }


    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getinfoProduk() {

        $str = "{$this->judul}  | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class Komik extends Produk {
    public $jmlHalaman;


    //  disini kita juga melakukan ovveriding dengan memanngil construct yg dipunyai oleh class parentNya
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }



    public function getinfoProduk() {
        // Ovveriding adalah sebuah istilah dimana kita bisa membuat method dengan di CLASS Child yg memilik nama  yg sama dengan CLASS Parentnya. atau mengambil alih metod yg kita buat menimpa punya nya parent class. Kenapa dilakukan untuk melakukan fungsionalitas yg sama  tapi dengan beberpa keadaan yg berbeda. (::) adalah method static
        $str = "Komik : " . parent::getinfoProduk() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }
}


class Game extends Produk {
    public $waktumain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0){

    parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktumain = $waktumain;
    }

    


    public function getinfoProduk() {
        $str = "Game : " . parent::getinfoProduk() . " ~ {$this->waktumain} Jam.";
        return $str;
    }
}




class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}




$produk1 = new Komik( "Naruto", "Mashasi kimoto", "Shonen joump", 30000, 100);

$produk2 = new Game( "Gta", "Ucok", "Gatau", 1000,50);


echo $produk1->getinfoProduk();
echo "<br>";
echo $produk2->getinfoProduk();
echo "<hr>";

$produk2->setdiskon(45);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setpenulis("Ferdi");
echo $produk1->getPenulis();




?>