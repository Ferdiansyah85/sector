<?php
session_start();

// Hubungkan ke database
$koneksi = mysqli_connect("localhost", "root", "", "katar");
if (mysqli_connect_errno()) {
    error_log("Failed to connect to MySQL: " . mysqli_connect_error());
    exit();
}

// Tangkap data dari formulir
$nama = $_POST['nama'];
$password = $_POST['password'];

// Query untuk memeriksa kredensial pengguna
$query = "SELECT * FROM pengguna WHERE nama='$nama'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    error_log("Error: " . mysqli_error($koneksi));
    header("Location: login.php?error=1");
    exit();
}

$user = mysqli_fetch_assoc($result);
if (!$user) {
    error_log("Error: User not found with name $nama");
}

if ($user && password_verify($password, $user['password'])) {
    // Setel peran pengguna ke dalam sesi
    $_SESSION['user_role'] = $user['role'];
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['nama'] = $nama;
    
    // Redirect sesuai peran pengguna
    if ($_SESSION['user_role'] === 'admin') {
        header("Location: admin_dashboard.php");
    } else {
        header("Location: member_dashboard.php");
    }
    exit();
} else {
    // Login gagal
    error_log("Error: Invalid credentials for user $nama");
    header("Location: login.php?error=1");
    exit();
}
?>
