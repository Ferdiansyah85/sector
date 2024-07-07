<?php
// Hubungkan ke database
$koneksi = mysqli_connect("localhost", "root", "", "katar");

// Tangkap parameter ID kegiatan yang ingin dihapus dari URL
$id_kegiatan = $_GET['kegiatanid'];

// Query untuk menghapus kegiatan dari database berdasarkan ID
$query = "DELETE FROM kegiatan WHERE kegiatanid = '$id_kegiatan'";
$result = mysqli_query($koneksi, $query);

// Periksa apakah penghapusan berhasil
if ($result) {
    // Jika berhasil, kirimkan respons JSON yang menyatakan sukses
    echo json_encode(['status' => 'success']);
} else {
    // Jika gagal, kirimkan respons JSON yang menyatakan gagal
    echo json_encode(['status' => 'error']);
}
?>
