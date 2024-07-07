<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid d-flex align-items-center justify-content-center h-100 mt-5">
        <div class="row">
            <div class="col-md-12 card-body">
                <h2><i class="bi bi-file-person"></i>Registrasi</h2>
                <form action="register_process.php" method="POST">
                    <div class="form-group">
                        <label for="nama"><i class="bi bi-person-fill icon"></i>Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="bi bi-envelope-at-fill icon"></i>Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="bi bi-lock-fill icon"></i>Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary container-fluid">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
