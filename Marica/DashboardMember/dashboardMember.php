<?php
session_start();
if(!isset($_SESSION["signIn"])) {
  header("Location: ../sign/member/sign_in.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
  <title>Dashboard Siswa | CuyPerpus</title>
  <style>
    .service-card {
      transition: transform 0.3s, box-shadow 0.3s;
      border-radius: 10px;
      overflow: hidden;
    }
    .service-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .navbar {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .navbar-brand img {
      transition: transform 0.3s;
    }
    .navbar-brand:hover img {
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../assets/logo.png" width="120">
      </a>
      <div class="dropdown">
        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
          <img src="../assets/memberLogo.png" width="40">
        </button>
        <ul class="dropdown-menu dropdown-menu-end mt-2">
          <li class="dropdown-header text-center">
            <img src="../assets/memberLogo.png" width="60" class="mb-2">
            <h6 class="text-capitalize"><?= $_SESSION['member']['nama'] ?></h6>
            <small class="text-muted">Siswa</small>
          </li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <a class="dropdown-item text-danger" href="signOut.php">
              <i class="fas fa-sign-out-alt me-2"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mt-5 pt-4">
    <div class="alert alert-success mt-4">
      <i class="fas fa-user-circle me-2"></i> Selamat datang, <strong><?= $_SESSION['member']['nama'] ?></strong>!
    </div>
    
    <h2 class="fw-bold mb-4">Layanan Perpustakaan</h2>
    
    <div class="row g-4">
      <?php
      $services = [
        ['Daftar Buku', 'buku/daftarBuku.php', '../assets/dashboardCardMember/daftarBuku.png'],
        ['Peminjaman', 'formPeminjaman/TransaksiPeminjaman.php', '../assets/dashboardCardMember/peminjaman.png'],
        ['Pengembalian', 'formPeminjaman/TransaksiPengembalian.php', '../assets/dashboardCardMember/pengembalian.png'],
        ['Denda', 'formPeminjaman/TransaksiDenda.php', '../assets/dashboardCardMember/denda.png']
      ];
      
      foreach ($services as $service) {
        echo '
        <div class="col-md-6">
          <a href="'.$service[1].'" class="text-decoration-none">
            <div class="service-card shadow-sm">
              <img src="'.$service[2].'" alt="'.$service[0].'" class="img-fluid rounded">
            </div>
          </a>
        </div>';
      }
      ?>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-light py-3 mt-5">
    <div class="container text-center">
      <span class="text-muted">© 2025 Marica - Sistem Perpustakaan Digital</span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>