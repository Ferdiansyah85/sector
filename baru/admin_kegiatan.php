<?php
session_start();

// Periksa apakah pengguna telah login sebagai admin
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

// Setel nama pengguna dari sesi ke dalam variabel lokal
$loggedInUsername = isset($_SESSION['nama']) ? $_SESSION['nama'] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="kegiatan.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Awal navbar -->
    <nav class="navbar  mb-5 navbar-expand-lg navbar-dark bg-dark fixed-top navbar-kegiatan">
        <div class="container">
            <a class="navbar-brand" href="#">Admin  <?php echo $loggedInUsername; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin_dashboard.php">Beranda</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="admin_kegiatan.php">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang_kami.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" onclick="handleLogout(event)">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- awal tabel -->
    <div class="container-fluid mt-5 table-container">
    <div class="icon-text-container">
        <i class="bi bi-journal-bookmark"></i>
        <h1>Daftar Kegiatan</h1>
    </div>
        <button class="btn btn-primary mb-3" onclick="toggleForm()">Tambah Kegiatan</button>
        <!-- Tabel kegiatan -->
        <table class="table table-striped table-bordered table-dark" id="tabel-kegiatan">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kegiatan</th>
                    <th scope="col">Tempat</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Jadwal Kegiatan</th>
                    <th scope="col">Laporan Kegiatan</th>
                    <th scope="col">Detail</th>
                    <th scope="col" colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data kegiatan akan dimasukkan secara dinamis di sini -->
            </tbody>
        </table>
    </div>
</div>
    <!-- akhir tabel -->

    <!-- Form tambah kegiatan -->
<div class="container mt-5" id="form-kegiatan" style="display: none;">
    <h2>Tambah Kegiatan</h2>
    <form action="tambah_kegiatan.php" method="POST">
        <div class="form-group">
            <label for="nama_kegiatan">Nama Kegiatan:</label>
            <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
        </div>
        <div class="form-group">
            <label for="tempat">Tempat Kegiatan:</label>
            <input type="text" class="form-control" id="tempat" name="tempat" required>
        </div>
        <div class="form-group">
            <label for="jam_kegiatan">Jam Kegiatan:</label>
            <input type="time" class="form-control" id="jam" name="jam" step="1" required>
        </div>
        <div class="form-group">
            <label for="jadwal_kegiatan">Jadwal Kegiatan:</label>
            <input type="date" class="form-control" id="jadwal_kegiatan" name="jadwal_kegiatan" required>
        </div>
        <div class="form-group">
            <label for="laporan_kegiatan">Laporan Kegiatan:</label>
            <input type="text" class="form-control" id="laporan_kegiatan" name="laporan_kegiatan" required>
        </div>
        <div class="form-group">
            <label for="detail">Link:</label>
            <input type="text" class="form-control" id="detail" name="detail" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>


<!-- Form edit kegiatan -->
<div class="container mt-5" id="form-edit" style="display: none;">
        <h2>Edit Kegiatan</h2>
        <form id="form-edit-kegiatan" method="POST">
            <input type="hidden" id="edit_kegiatanid" name="kegiatanid">
            <div class="form-group">
                <label for="edit_nama_kegiatan">Nama Kegiatan:</label>
                <input type="text" class="form-control" id="edit_nama_kegiatan" name="nama_kegiatan" required>
            </div>
            <div class="form-group">
                <label for="edit_tempat">Tempat Kegiatan:</label>
                <input type="text" class="form-control" id="edit_tempat" name="tempat" required>
            </div>
            <div class="form-group">
                <label for="edit_jam">Jam:</label>
                <input type="time" class="form-control" id="edit_jam" name="jam" required>
            </div>
            <div class="form-group">
                <label for="edit_jadwal_kegiatan">Jadwal Kegiatan:</label>
                <input type="date" class="form-control" id="edit_jadwal_kegiatan" name="jadwal_kegiatan" required>
            </div>
            <div class="form-group">
                <label for="edit_laporan_kegiatan">Laporan Kegiatan:</label>
                <input type="text" class="form-control" id="edit_laporan_kegiatan" name="laporan_kegiatan" required>
            </div>
            <div class="form-group">
                <label for="edit_detail">Link:</label>
                <input type="text" class="form-control" id="edit_detail" name="detail" required>
            </div>
            <button type="button" class="btn btn-primary" onclick="simpanPerubahanKegiatan()">Simpan Perubahan</button>
            <button type="button" class="btn btn-secondary" onclick="sembunyikanFormEdit()">Batal</button>
        </form>
    </div>
<!-- AKHIR -->

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

    
    <!-- Script JavaScript -->
    <script>
    // Fungsi untuk menampilkan/menyembunyikan formulir tambah kegiatan
    function toggleForm() {
        var form = document.getElementById('form-kegiatan');
        if (form.style.display === 'none') {
            form.style.display = 'block';
        } else {
            form.style.display = 'none';
        }
    }
</script>



    <script>
        // Fungsi untuk memuat data kegiatan dari ambil_kegiatan.php
function loadDataKegiatan() {
    fetch('ambil_kegiatan.php')
        .then(response => response.json())
        .then(data => {
            // Loop melalui data kegiatan dan membangun baris tabel
            const tbody = document.querySelector('tbody');
            tbody.innerHTML = '';
            data.forEach((kegiatan, index) => {
                const row = `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${kegiatan.nama_kegiatan}</td>
                        <td>${kegiatan.tempat}</td>
                        <td>${kegiatan.jam}</td>
                        <td>${kegiatan.jadwal_kegiatan}</td>
                        <td>${kegiatan.laporan_kegiatan}</td>
                        <td><a href="${kegiatan.detail}" class="btn btn-info" target="_blank"><i class="bi bi-info-circle"></i> Detail</a></td> <!-- Tombol Detail dengan link -->
                        <td><button class="btn btn-warning" onclick="isiFormEdit(${kegiatan.kegiatanid})"><i class="bi bi-pencil"></i> Edit</button></td>
                        <td><button class="btn btn-danger" onclick="hapusKegiatan(${kegiatan.kegiatanid})"><i class="bi bi-trash"></i> Hapus</button></td>
                    </tr>
                `;
                tbody.innerHTML += row;
            });
        })
        .catch(error => console.error('Error:', error));
}


        // Panggil fungsi untuk memuat data kegiatan saat halaman dimuat
        window.onload = function() {
            loadDataKegiatan();
        };
    </script>

    <!-- Script untuk menghapus kegiatan -->
    <script>
        // Fungsi untuk menghapus kegiatan berdasarkan ID
        function hapusKegiatan(kegiatanid) {
            // Konfirmasi penghapusan
            if (confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')) {
                // Kirim permintaan AJAX untuk menghapus kegiatan
                fetch(`hapus_kegiatan.php?kegiatanid=${kegiatanid}`, {
                    method: 'DELETE'
                })
                .then(response => response.json())
                .then(data => {
                    // Muat ulang data kegiatan setelah penghapusan berhasil
                    loadDataKegiatan();
                })
                .catch(error => console.error('Error:', error));
            }
        }
    </script>

    <!-- Script untuk mengisi formulir edit dengan data kegiatan yang dipilih -->
    <script>
        function isiFormEdit(kegiatanid) {
            // Mengambil data kegiatan berdasarkan ID menggunakan AJAX
            fetch(`ambil_kegiatan.php?kegiatanid=${kegiatanid}`)
                .then(response => response.json())
                .then(data => {
                    // Mengisi nilai formulir edit dengan data kegiatan yang diterima
                    document.getElementById('edit_kegiatanid').value = data[0].kegiatanid;
                    document.getElementById('edit_nama_kegiatan').value = data[0].nama_kegiatan;
                    document.getElementById('edit_tempat').value = data[0].tempat;
                    document.getElementById('edit_jam').value = data[0].jam;
                    document.getElementById('edit_jadwal_kegiatan').value = data[0].jadwal_kegiatan;
                    document.getElementById('edit_laporan_kegiatan').value = data[0].laporan_kegiatan;
                    document.getElementById('edit_detail').value = data[0].detail;

                    // Menampilkan formulir edit
                    document.getElementById('form-edit').style.display = 'block';
                })
                .catch(error => console.error('Error:', error));
        }
    </script>

    <!-- Script untuk menyimpan perubahan kegiatan -->
    <script>
        function simpanPerubahanKegiatan() {
            // Mengambil nilai input dari formulir edit
            var kegiatanid = document.getElementById('edit_kegiatanid').value;
            var nama_kegiatan = document.getElementById('edit_nama_kegiatan').value;
            var tempat = document.getElementById('edit_tempat').value;
            var jam = document.getElementById('edit_jam').value;
            var jadwal_kegiatan = document.getElementById('edit_jadwal_kegiatan').value;
            var laporan_kegiatan = document.getElementById('edit_laporan_kegiatan').value;
            var detail = document.getElementById('edit_detail').value;

            // Membuat objek FormData untuk mengirim data ke server
            var formData = new FormData();
            formData.append('kegiatanid', kegiatanid);
            formData.append('nama_kegiatan', nama_kegiatan);
            formData.append('tempat', tempat);
            formData.append('jam', jam);
            formData.append('jadwal_kegiatan', jadwal_kegiatan);
            formData.append('laporan_kegiatan', laporan_kegiatan);
            formData.append('detail', detail);

            // Kirim data ke server menggunakan fetch API dengan metode POST
            fetch('simpan_perubahan_kegiatan.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Cek status respons dari server
                if (data.status === 'success') {
                    alert(data.message); // Tampilkan pesan sukses
                    // Muat ulang data kegiatan setelah penyimpanan berhasil
                    loadDataKegiatan();
                    // Sembunyikan formulir edit setelah penyimpanan berhasil
                    sembunyikanFormEdit();
                } else {
                    alert(data.message); // Tampilkan pesan error
                }
            })
            .catch(error => console.error('Error:', error));
        }
    </script>

    

    <!-- Fungsi untuk menyembunyikan formulir edit -->
    <script>
        function sembunyikanFormEdit() {
            document.getElementById('form-edit').style.display = 'none';
        }
    </script>

<script>
function handleLogout(event) {
    event.preventDefault(); // Mencegah tindakan default dari tautan

    // Menampilkan dialog konfirmasi
    var confirmation = confirm("Apakah Anda yakin ingin logout?");
    
    if (confirmation) {
        // Jika pengguna mengklik "Ya", arahkan ke halaman login
        window.location.href = 'login.php';
    }
}
</script>
</body>
</html>