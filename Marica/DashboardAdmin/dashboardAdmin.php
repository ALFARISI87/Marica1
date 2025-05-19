<?php
session_start();
if(!isset($_SESSION["signIn"])) {
  header("Location: ../sign/admin/sign_in.php");
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
  <title>Dashboard Admin | CuyPerpus</title>
  <style>
    .management-card {
      transition: all 0.3s;
      border-radius: 10px;
      overflow: hidden;
    }
    .management-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .navbar {
      background: linear-gradient(135deg, #343a40 0%, #212529 100%);
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
          <img src="../assets/adminLogo.png" width="40">
        </button>
        <ul class="dropdown-menu dropdown-menu-end mt-2">
          <li class="dropdown-header text-center">
            <img src="../assets/adminLogo.png" width="60" class="mb-2">
            <h6 class="text-capitalize"><?= $_SESSION['admin']['nama_admin'] ?></h6>
            <small class="text-success">
              <i class="fas fa-circle-check me-1"></i> Admin Terverifikasi
            </small>
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
      <i class="fas fa-user-shield me-2"></i> Selamat datang, <strong><?= $_SESSION['admin']['nama_admin'] ?></strong>!
    </div>
    
    <h2 class="fw-bold mb-4">Manajemen Sistem</h2>
    
    <div class="row g-4">
      <?php
      $modules = [
        ['Manajemen Member', 'member/member.php', '../assets/dashboardCardMember/member.png'],
        ['Manajemen Buku', 'buku/daftarBuku.php', '../assets/dashboardCardMember/bukuAdmin.png'],
        ['Peminjaman', 'peminjaman/peminjamanBuku.php', '../assets/dashboardCardMember/peminjaman.png'],
        ['Pengembalian', 'pengembalian/pengembalianBuku.php', '../assets/dashboardCardMember/pengembalianAdmin.png'],
        ['Manajemen Denda', 'denda/daftarDenda.php', '../assets/dashboardCardMember/denda.png']
      ];
      
      foreach ($modules as $module) {
        echo '
        <div class="col-md-6 col-lg-4">
          <a href="'.$module[1].'" class="text-decoration-none">
            <div class="management-card shadow-sm">
              <img src="'.$module[2].'" alt="'.$module[0].'" class="img-fluid rounded">
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
      <span class="text-muted">© 2025 Marica - Sistem Manajemen Perpustakaan</span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>