<?php
session_start();

// Periksa apakah pengguna telah login sebagai admin
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'member') {
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
    <title>Angggota</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"> Anggota <?php echo $loggedInUsername; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="anggota_kegiatan.php">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Awal Carousel -->
<div id="carouselExampleCaptions" class="carousel slide custom-carousel" data-ride="carousel" data-interval="3000">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="foto/kerjabakti.jpeg" class="w-100" alt="Gambar 1">
            <div class="carousel-caption d-none d-md-block">
                <h3>Sosial</h3>
                <!-- <h5>Selamat Datang Di Web Sederhana Kami</h5> -->
            </div>
        </div>
        <div class="carousel-item">
            <img src="foto/aji.jpeg" class="w-100" alt="Gambar 2">
            <div class="carousel-caption d-none d-md-block">
                <h3>Olahraga</h3>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
            </div>
        </div>
        <div class="carousel-item">
            <img src="foto/obor.jpeg" class="w-100" alt="Gambar 2">
            <div class="carousel-caption d-none d-md-block">
                <h3>Tradisi</h3>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
            </div>
        </div>
        <!-- Tambahkan carousel-item lainnya di sini -->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Akhir Carousel -->


<!-- isi konten dan awal parallax -->
    <div class="container mt-5 parallax">
    <div class="row">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    <h1>Apa itu Karang Taruna?</h1>
                    <p>Karang Taruna merupakan organisasi kepemudaan di Indonesia. Karang Taruna tersebar di berbagai wilayah Indonesia, tidak terkecuali di DKI Jakarta. Karang Taruna adalah wadah pengembangan generasi muda nonpartisan, yang tumbuh berdasarkan kesadaran dan rasa tanggung jawab sosial dari, oleh, serta untuk masyarakat, khususnya generasi muda di wilayah Desa/Kelurahan atau komunitas sosial sederajat.</p>
                    <p>Organisasi ini bergerak di bidang kesejahteraan sosial yang di dalamnya mencakup  pembinaan dan pemberdayaan remaja dalam bidang keorganisasian, pengembangan kegiatan ekonomi produktif dengan memberdayakan potensi sumber daya manusia dan lingkungan yang telah ada, pembinaan olahraga, keterampilan, advokasi, keagamaan, serta kesenian.</p> 
                    <p>Secara nasional, dasar hukum Karang Taruna tercantum dalam Peraturan Menteri Dalam Negeri No. 5 Tahun 2007 tentang Pedoman Penataan Lembaga Kemasyarakatan dan Peraturan Menteri Sosial No. 77/HUK/2010 tentang Pedoman Dasar Karang Taruna. Sebagai peraturan pelaksana dari Permensos 77/2010, di Provinsi DKI Jakarta telah disusun Peraturan Gubernur DKI Jakarta No. 8 Tahun 2012 tentang Karang Taruna yang di dalamnya mengatur ketentuan yang lebih khusus lagi mengenai Karang Taruna di Jakarta.</p>
                    <h2>Tujuan Karang Taruna</h2>
                    <p>Tujuan utama dari Karang Taruna adalah:</p>
                    <ul>
                        <li>Meningkatkan kesejahteraan sosial masyarakat di tingkat lokal.</li>
                        <li>Memberdayakan dan mengembangkan potensi generasi muda dalam berbagai bidang kegiatan.</li>
                        <li>Membangun jaringan solid antar pemuda untuk berpartisipasi dalam pembangunan masyarakat.</li>
                    </ul>
                    <h2>Fungsi Karang Taruna</h2>
                    <p>Karang Taruna memiliki beberapa fungsi, antara lain:</p>
                    <ul>
                        <li>Pembinaan dan pengembangan kepemudaan.</li>
                        <li>Partisipasi dalam kegiatan sosial, ekonomi, dan budaya di masyarakat.</li>
                        <li>Pemberdayaan masyarakat melalui program-program yang dilaksanakan oleh Karang Taruna.</li>
                    </ul>
                    <p>Secara keseluruhan, Karang Taruna bertujuan untuk menjadi motor penggerak pembangunan masyarakat yang berbasis pada potensi dan kreativitas generasi muda.</p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="foto/kerjabakti.jpeg" class="card-img-top" alt="Gambar Berita">
            <div class="card-body">
                <h5 class="card-title">Para pemuda yg sedang melihat!</h5>
                <p class="card-text">Apakah para pemuda ini hanya melihat tanpa melakukan apapun...??</p>
                <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
        </div>
        <div class="card">
    <img src="foto/bola.jpeg" class="card-img-top" alt="Gambar Berita">
    <div class="card-body">
        <h5 class="card-title">Mirisnya Anak Kota</h5>
        <p class="card-text">para anak-anak yang sedang melakukan olahraga ditempat yang bukan seharusnya!!</p>
        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer bg-dark text-white">
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





    


    <!-- jQuery dan JavaScript Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Aktivasi Carousel -->
<script>
    $('.carousel').carousel();
</script>



 <!-- Aktivasi efek paralaks -->
 <script>
       document.addEventListener('DOMContentLoaded', function() {
    // Tentukan elemen konten paralaks
    var parallaxContent = document.querySelector('.parallax');

    // Tambahkan event listener untuk mendeteksi perubahan scroll
    window.addEventListener('scroll', function() {
        // Periksa apakah elemen paralaks sudah masuk dalam viewport
        var parallaxPosition = parallaxContent.getBoundingClientRect().top;
        var screenPosition = window.innerHeight;

        // Jika elemen paralaks masuk dalam viewport, aktifkan efek paralaks
        if (parallaxPosition < screenPosition) {
            parallaxContent.style.opacity = '1';
        } else {
            parallaxContent.style.opacity = '0';
        }
    });
});
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sembunyikan konten di dalam .col-md-4
        var col4 = document.querySelector('.col-md-4');
        col4.style.transition = 'opacity 1s ease'; // Tambahkan efek transisi
        col4.style.opacity = '0';

        // Tunggu 5 detik sebelum menampilkan konten di dalam .col-md-4
        setTimeout(function() {
            // Tampilkan konten di dalam .col-md-4
            col4.style.opacity = '1';
        }, 7000); // Waktu dalam milidetik (5 detik = 5000 milidetik)
    });
</script>

    <!-- jQuery dan JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
