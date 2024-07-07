<?php

require_once 'App/init.php';

$produk1 = new Komik( "Naruto", "Mashasi kimoto", "Shonen joump", 30000, 100);

$produk2 = new Game( "Gta", "Ucok", "Gatau", 1000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new Coba;