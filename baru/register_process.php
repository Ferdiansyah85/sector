<?php
// Hubungkan ke database
$koneksi = mysqli_connect("localhost", "root", "", "katar");
if (mysqli_connect_errno()) {
    error_log("Failed to connect to MySQL: " . mysqli_connect_error());
    exit();
}

// Tangkap data dari formulir
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Query untuk menyimpan data pengguna ke database
$query = "INSERT INTO pengguna (nama, email, password, role) VALUES ('$nama', '$email', '$password', 'member')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    // Registrasi berhasil
    header("Location: login.php?success=1");
    exit;
} else {
    // Registrasi gagal
    error_log("Error: " . mysqli_error($koneksi));
    header("Location: register.php?error=1");
    exit;
}
?>
