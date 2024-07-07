<?php 

class Produk {
    // Properti
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    // Method (function yang ada didalam kelas)
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// //  Menimpa isi dari properti
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// //  Bisa menambah property baru seprti dibawah
// $produk2->tambahProperty = "hahah";
//var_dump($produk2);

// instance semua
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "mashasi kimoto";
$produk3->penerbit = "Shonen joump";
$produk3->harga = 30000;

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";

//$produk4 = new Produk(); yaitu sebuah object 
$produk4 = new Produk();
$produk4->judul = "GTA";
$produk4->penulis = "Ucok";
$produk4->penerbit = "Gatau";
$produk4->harga = 5000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();


?>