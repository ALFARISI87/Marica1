<?php 
session_start();

// Kalo udah login, redirect ke dashboard
if(isset($_SESSION["signIn"])) {
    header("Location: ../../DashboardMember/dashboardMember.php");
    exit;
}

require "../../loginSystem/connect.php";

if(isset($_POST["signIn"])) {
    $nama = strtolower($_POST["nama"]);
    $nisn = $_POST["nisn"];
    $password = $_POST["password"];
    
    $result = mysqli_query($connect, "SELECT * FROM member WHERE nama = '$nama' AND nisn = $nisn");
    
    if(mysqli_num_rows($result) === 1) {
        $pw = mysqli_fetch_assoc($result);
        if(password_verify($password, $pw["password"])) {
            $_SESSION["signIn"] = true;
            $_SESSION["member"]["nama"] = $nama;
            $_SESSION["member"]["nisn"] = $nisn;
            header("Location: ../../DashboardMember/dashboardMember.php");
            exit;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <title>Login Member | CuyPerpus</title>
    
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../../assets/library-bg.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .login-card {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.9);
        }
        .login-header {
            border-radius: 15px 15px 0 0;
            background: rgba(102, 126, 234, 0.8);
            color: white;
            padding: 20px 0;
        }
        .btn-login {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            padding: 10px 25px;
            font-weight: 600;
        }
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
        }
    </style>
</head>
<body class="d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <!-- Card Login -->
                <div class="login-card">
                    <!-- Header Card -->
                    <div class="login-header text-center">
                        <img src="../../assets/memberLogo.png" alt="Logo" width="80" class="mb-3">
                        <h2 class="fw-bold mb-0">Login Member</h2>
                        <p class="mb-0">Masuk untuk akses semua fitur keren kami</p>
                    </div>
                    
                    <!-- Form Login -->
                    <div class="card-body p-4 p-md-5">
                        <form action="" method="post" class="needs-validation" novalidate>
                            <!-- Field Nama -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                    <div class="invalid-feedback">
                                        Isi nama kamu dong!
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Field NISN -->
                            <div class="mb-3">
                                <label for="nisn" class="form-label">NISN</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    <input type="number" class="form-control" id="nisn" name="nisn" required>
                                    <div class="invalid-feedback">
                                        NISN-nya jangan lupa!
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Field Password -->
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                    <div class="invalid-feedback">
                                        Passwordnya diisi ya!
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Tombol Submit -->
                            <div class="d-grid gap-3">
                                <button class="btn btn-login text-white" type="submit" name="signIn">
                                    <i class="fas fa-sign-in-alt me-2"></i> Login
                                </button>
                                <a href="../link_login.html" class="btn btn-outline-secondary">
                                    <i class="fas fa-home me-2"></i> Kembali ke Home
                                </a>
                                <a href="sign_up.php" class="text-center text-decoration-none">
                                    Belum punya akun? <span class="text-primary fw-bold">Daftar sekarang</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Pesan Error -->
                <?php if(isset($error)) : ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i> Nama/NISN/Password salah nih, coba lagi ya!
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Script Validasi Form -->
    <script>
    (() => {
        'use strict'
        
        const forms = document.querySelectorAll('.needs-validation')
        
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>