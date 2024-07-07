<?php
// Periksa apakah terdapat parameter query 'error'
if(isset($_GET['error']) && $_GET['error'] == 1) {
    echo "<div class='login-error'>Login gagal. Nama pengguna atau kata sandi salah.</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="body-error">
    <div class="container-fluid d-flex align-items-center justify-content-center h-100 mt-5">
        <div class="row">
            <div class="col-md-12 card-body bordered">
                <h2><i class="bi bi-person-check-fill"></i>Login</h2>
                <form action="login_process.php" method="POST">
                    <div class="form-group">
                        <label for="nama"><i class="bi bi-person-fill icon"></i>Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="bi bi-lock-fill icon"></i>Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary container-fluid button">Masuk</button> 
                    <div class="tengah">
                        <a class="daftar" href="register.php">Daftar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
