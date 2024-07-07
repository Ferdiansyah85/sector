<?php
// Hubungkan ke database
$koneksi = mysqli_connect("localhost", "root", "", "katar");

// Tangkap data dari formulir
$nama_kegiatan = $_POST['nama_kegiatan'];
$tempat = $_POST['tempat'];
$jam = $_POST['jam'];
$jadwal_kegiatan = $_POST['jadwal_kegiatan'];
$laporan_kegiatan = $_POST['laporan_kegiatan'];
$detail = $_POST['detail'];


// Query untuk menyimpan data kegiatan ke database, termasuk nama file foto
$query = "INSERT INTO kegiatan (nama_kegiatan, tempat, jam, jadwal_kegiatan, laporan_kegiatan, detail) VALUES ('$nama_kegiatan', '$tempat', '$jam', '$jadwal_kegiatan', '$laporan_kegiatan', '$detail')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    // Registrasi berhasil
    header("Location: admin_kegiatan.php?success=1");
    exit;
} else {
    // Registrasi gagal
    header("Location: admin_kegiatan.php?error=1");
    exit;
}
?>
