<?php 

// jika dalam oop "define" ini tidak bisa dimasukan kedalam class
// define('NAMA' , 'Ferdi');
// echo NAMA;

// echo "<br>";

// jika dalam oop "const" bisa digunakan ke dlam class
// const UMUR = 23;
// echo UMUR;


// class Coba {
//     const NAMA = 'Ferdi';
// }

// echo Coba::NAMA;



// echo __LINE__;

// function coba() {
//     return __FUNCTION__;
// }
// echo coba();

use Coba as GlobalCoba;

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;








?>