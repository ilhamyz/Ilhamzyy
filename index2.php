<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin | Petugas</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
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
                        <span>Form Login Administrator / Petugas</span>
                    </div>
                    <div class="card-body">
                        <form action="proses-login-petugas.php" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username Anda.." required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Anda.." required>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Login</button>
                            <a href="index.php">Login sebagai Siswa</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>