<?php
session_start();

if(isset($_SESSION["signIn"])) {
  header("Location: ../../DashboardAdmin/dashboardAdmin.php");
  exit;
}

require "../../loginSystem/connect.php";

if(isset($_POST["signIn"])) {
  $nama = strtolower($_POST["nama_admin"]);
  $password = $_POST["password"];
  
  $result = mysqli_query($connect, "SELECT * FROM admin WHERE nama_admin = '$nama' AND password = '$password'");
  
  if(mysqli_num_rows($result) === 1) {
    $_SESSION["signIn"] = true;
    $_SESSION["admin"]["nama_admin"] = $nama;
    header("Location: ../../DashboardAdmin/dashboardAdmin.php");
    exit;
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
  <title>Admin Login | CuyPerpus</title>
  <style>
    body {
      background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../../assets/library-bg.jpg');
      background-size: cover;
      height: 100vh;
    }
    .login-card {
      border: none;
      border-radius: 15px;
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.9);
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }
    .login-header {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border-radius: 15px 15px 0 0;
    }
    .btn-login {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border: none;
    }
  </style>
</head>
<body class="d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="login-card">
          <div class="login-header text-center p-4">
            <img src="../../assets/adminLogo.png" width="80" class="mb-3">
            <h2 class="fw-bold mb-0">Admin Portal</h2>
            <p class="mb-0">Masuk untuk mengelola sistem</p>
          </div>
          <div class="card-body p-4">
            <form action="" method="post" novalidate>
              <div class="mb-3">
                <label class="form-label">Username</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                  <input type="text" class="form-control" name="nama_admin" required>
                </div>
              </div>
              <div class="mb-4">
                <label class="form-label">Password</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  <input type="password" class="form-control" name="password" required>
                </div>
              </div>
              <button class="btn btn-login text-white w-100 py-2 mb-3" type="submit" name="signIn">
                <i class="fas fa-sign-in-alt me-2"></i> Login
              </button>
              <?php if(isset($error)) : ?>
                <div class="alert alert-danger text-center">
                  <i class="fas fa-exclamation-circle me-2"></i> Username/Password salah!
                </div>
              <?php endif; ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>