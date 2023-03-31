<?php
session_start();
if (empty($_SESSION['id_petugas'])) {
    echo "<script>alert('Maaf Anda Belum Login');
    window.location.assign('../index2.php');
    </script>";
}
if ($_SESSION['level'] != 'petugas') {
    echo "<script>alert('Maaf Anda Bukan Sesi Admin');
    window.location.assign('../index2.php');
    </script>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Petugas - Aplikasi Pembayaran SPP</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-mt-5 {
            margin-top: 50px;
        }

        .alert-info {
            background-color: #e2f3f5;
            color: #0c5460;
            border-color: #bee5eb;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h3 class="text-center mb-4">Aplikasi Pembayaran SPP</h3>
        <div class="alert alert-info text-center">
            Anda Login Sebagai Petugas <b><?= $_SESSION['nama_petugas'] ?></b> di Aplikasi Pembayaran SPP
        </div>
        <div class="text-center mt-4">
            <a href="petugas.php" class="btn btn-primary mx-2">Petugas</a>
            <a href="petugas.php?url=pembayaran" class="btn btn-primary mx-2">Pembayaran</a>
            <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</button>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <?php
                $file = @$_GET['url'];
                if (empty($file)) {
                    echo "<h4>Selamat Datang di Halaman Petugas</h4>";
                    echo "Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi di sekolah.";
                } else {
                    include $file . '.php';
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin Logout?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="petugas.php?url=logout" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
        <script src="../js/bootstrap.bundle.min.js">
        </script>
</body>

</html>