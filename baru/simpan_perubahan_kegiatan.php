<?php
// Hubungkan ke database
$koneksi = mysqli_connect("localhost", "root", "", "katar");

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Ambil data yang dikirimkan dari form edit
$kegiatanid = $_POST['kegiatanid'];
$nama_kegiatan = $_POST['nama_kegiatan'];
$tempat = $_POST['tempat'];
$jam = $_POST['jam'];
$jadwal_kegiatan = $_POST['jadwal_kegiatan'];
$laporan_kegiatan = $_POST['laporan_kegiatan'];
$detail = $_POST['detail'];

// Query untuk menyimpan perubahan kegiatan
$query = "UPDATE kegiatan SET nama_kegiatan='$nama_kegiatan', tempat='$tempat', jam='$jam', jadwal_kegiatan='$jadwal_kegiatan', laporan_kegiatan='$laporan_kegiatan', detail='$detail' WHERE kegiatanid=$kegiatanid";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    // Buat respons JSON dengan status berhasil
    $response = array("status" => "success", "message" => "Perubahan kegiatan berhasil disimpan");
    echo json_encode($response);
} else {
    // Buat respons JSON dengan status error dan pesan error
    $response = array("status" => "error", "message" => "Gagal menyimpan perubahan kegiatan: " . mysqli_error($koneksi));
    echo json_encode($response);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
