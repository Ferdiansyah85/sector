<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="tentangkami.css">
</head>
<body>
    <!-- Awal navbar -->
    <nav class="navbar  mb-5 navbar-expand-lg navbar-dark bg-dark fixed-top navbar-kegiatan">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin_dashboard.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_kegiatan.php">Kegiatan</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- Awal jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container text-center">
        <img src="foto/logo.jpg" width="25%" class="rounded-circle img-thumbnail bg-dark" >
        <h1 class="display-4">Karang Taruna</h1>
        <p class="lead">Unit RW 08 Kebon Kacang</p>
      </div>
    </div>
    <!-- akhir jumbotron -->


<!-- Visi & Misi -->
<section id="about" class="about">
<div class="container">
  <div class="row mb-4">
    <div class="col text-center">
      <h2>Visi</h2>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-5 text-center">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum quaerat laudantium error veniam blanditiis. Quaerat libero culpa ex, cumque ullam molestias, nobis quisquam provident dolorem id maxime deleniti delectus vitae!</p>
    </div>
  </div>
</div>
</section>

<section id="misi" class="misi">
<div class="container mt-5">
  <div class="row mb-4">
    <div class="col text-center">
      <h2>Misi</h2>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-5 text-center">
    <ul>
        <li>Meningkatkan kesejahteraan sosial masyarakat di tingkat lokal.</li>
        <li>Memberdayakan dan mengembangkan potensi generasi muda dalam berbagai bidang kegiatan.</li>
        <li>Membangun jaringan solid antar pemuda untuk berpartisipasi dalam pembangunan masyarakat.</li>
    </ul>
    </div>
  </div>
</div>
</section>

<!-- akhir visi dan misi -->

<section class="portfolio" id="portfolio">
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Galeri</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <a href="#" class="thumbnail">
                    <img src="foto/4.jpeg" class="img-fluid rounded">
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#" class="thumbnail">
                    <img src="foto/5.jpeg" class="img-fluid rounded">
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#" class="thumbnail">
                    <img src="foto/6.jpeg" class="img-fluid rounded">
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#" class="thumbnail">
                    <img src="foto/7.jpeg" class="img-fluid rounded">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- akhir galeri -->

 <!-- Kontak -->
 <section id="contact" class="contact mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Kontak</h2>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-white bg-dark mb-3 text-center">
                    <div class="card-header">Kantor Sekretariat</div>
                    <div class="card-body">
                        <h5 class="card-title">Pos Abu-abu RW 08</h5>
                        <p class="card-text">Jalan Kebon Kacang 41 No 1 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Telepon : 085778764128</li>
                        <li class="list-group-item">Email : katar08@gmail.com</li>
                        <li class="list-group-item">Twitter : katar08</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- akhir kontak -->

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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
