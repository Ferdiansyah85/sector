<?php
session_start();

// Periksa apakah pengguna telah login sebagai admin
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'admin') {
    error_log("Sesi tidak valid atau bukan admin."); // Log jika sesi tidak valid atau pengguna bukan admin
    header("Location: login.php");
    exit;
} else {
    error_log("Sesi valid untuk user_id: " . $_SESSION['user_id']); // Log jika sesi valid
}

// Setel nama pengguna dari sesi ke dalam variabel lokal
$loggedInUsername = isset($_SESSION['nama']) ? $_SESSION['nama'] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota Kegiatan</title>
    <link rel="stylesheet" href="kegiatan.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Awal navbar -->
    <nav class="navbar mb-5 navbar-expand-lg navbar-dark bg-dark fixed-top navbar-kegiatan">
        <div class="container">
            <a class="navbar-brand" href="#">Admin <?php echo $loggedInUsername; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin_dashboard.php">Beranda</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="anggota_kegiatan.php">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- Awal konten halaman anggota kegiatan -->
    <div class="container mt-5">
        <h1>Anggota Kegiatan</h1>
        <!-- Konten lainnya, misalnya tabel anggota kegiatan -->
        <table class="table table-striped table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Anggota</th>
                    <th scope="col">Peran</th>
                    <th scope="col">Kontak</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data anggota akan dimuat di sini -->
                <?php
                // Contoh pengambilan data anggota dari basis data
                // Gantikan dengan koneksi dan query yang sesuai
                $conn = new mysqli("host", "username", "password", "katar");

                if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }

                $sql = "SELECT id, nama, peran, kontak FROM anggota_kegiatan";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Menampilkan data anggota
                    $no = 1;
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $no++ . "</td>
                                <td>" . $row["nama"] . "</td>
                                <td>" . $row["peran"] . "</td>
                                <td>" . $row["kontak"] . "</td>
                                <td>
                                    <button class='btn btn-warning' onclick='editAnggota(" . $row["id"] . ")'><i class='bi bi-pencil'></i> Edit</button>
                                    <button class='btn btn-danger' onclick='hapusAnggota(" . $row["id"] . ")'><i class='bi bi-trash'></i> Hapus</button>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data anggota</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <!-- Akhir konten halaman anggota kegiatan -->

    <footer class="footer mt-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-1 icon card-body bordered">
                    <a href="#">
                        <i class="bi bi-facebook"></i>
                    </a>
                </div>
                <div class="col-md-1 icon card-body bordered">
                    <a href="#">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
                <div class="col-md-1 icon card-body">
                    <a href="#">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>
                <div class="col-md-5"></div>
                <div class="col-md-4 text-end">
                    <div class="py-1">
                        &copy; Unit Karang Taruna RW 08 Kel.Kebon Kacang
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function editAnggota(id) {
            // Implementasi fungsi untuk mengedit anggota
            console.log("Edit anggota dengan ID:", id);
        }

        function hapusAnggota(id) {
            // Implementasi fungsi untuk menghapus anggota
            if (confirm('Apakah Anda yakin ingin menghapus anggota ini?')) {
                console.log("Hapus anggota dengan ID:", id);
            }
        }
    </script>
</body>
</html>
