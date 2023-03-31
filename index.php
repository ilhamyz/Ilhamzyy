<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Pembayaran SPP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-image: url("background.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .card {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
            border: none;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            font-weight: bold;
            padding: 10px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        button[type="submit"] {
            width: 100%;
            margin-top: 20px;
        }

        a {
            margin-top: 20px;
            display: block;
            text-align: center;
            font-weight: bold;
            color: #007bff;
        }

        @media (min-width: 576px) {
            .col-md-4 {
                max-width: 400px;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-lock fa-2x mb-2 text-white"></i><br>
                        Form Login Siswa
                    </div>
                    <div class="card-body">
                        <form action="proses-login-siswa.php" method="post">
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                    </div>
                                    <input type="number" name="nisn" id="nisn" class="form-control" placeholder="Masukkan NISN Anda.." required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nis">NIS</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                    </div>
                                    <input type="number" name="nis" id="nis" class="form-control" placeholder="Masukkan NIS Anda.." required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Login</button>
                            <a href="index2.php">Login sebagai Administrator / Petugas</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>