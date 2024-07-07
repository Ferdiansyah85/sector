<?php
// Hubungkan ke database
$koneksi = mysqli_connect("localhost", "root", "", "katar");

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Cek apakah ada parameter ID kegiatan yang diberikan
if(isset($_GET['kegiatanid'])){
    // Tangkap ID kegiatan dari parameter URL
    $id_kegiatan = $_GET['kegiatanid'];

    // Query untuk mengambil kegiatan berdasarkan ID
    $query = "SELECT * FROM kegiatan WHERE kegiatanid = $id_kegiatan";
} else {
    // Jika tidak ada parameter ID, ambil semua kegiatan
    $query = "SELECT * FROM kegiatan";
}

// Eksekusi query
$result = mysqli_query($koneksi, $query);

// Buat array untuk menyimpan data kegiatan
$kegiatan = [];
while ($row = mysqli_fetch_assoc($result)) {
    $kegiatan[] = $row;
}

// Kembalikan data kegiatan sebagai respons JSON
echo json_encode($kegiatan);

// Tutup koneksi
mysqli_close($koneksi);
?>
