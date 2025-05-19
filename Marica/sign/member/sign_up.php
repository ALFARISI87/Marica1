<?php 
require "../../loginSystem/connect.php";
if(isset($_POST["signUp"]) ) {
    if(signUp($_POST) > 0) {
        echo "<script>
        alert('Daftar berhasil! Langsung login yuk!')
        document.location.href = 'sign_in.php';
        </script>";
    } else {
        echo "<script>
        alert('Daftar gagal! Coba cek lagi datanya ya!')
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <title>Daftar Member | CuyPerpus</title>
    
    <style>
        body {
            background: #f8f9fa;
        }
        .register-card {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .register-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px 0;
        }
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
        }
        .btn-register {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            padding: 10px 25px;
            font-weight: 600;
        }
        .input-group-text {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <!-- Card Daftar -->
                <div class="register-card">
                    <!-- Header Card -->
                    <div class="register-header text-center">
                        <img src="../../assets/memberLogo.png" alt="Logo" width="80" class="mb-3">
                        <h2 class="fw-bold mb-0">Daftar Member Baru</h2>
                        <p class="mb-0">Isi data dirimu dengan benar ya!</p>
                    </div>
                    
                    <!-- Form Daftar -->
                    <div class="card-body p-4 p-md-5">
                        <form action="" method="post" class="needs-validation" novalidate>
                            <!-- Baris 1: NISN dan Kode Member -->
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label for="nisn" class="form-label">NISN</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                        <input type="number" class="form-control" id="nisn" name="nisn" required>
                                        <div class="invalid-feedback">
                                            Isi NISN kamu dong!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="kode_member" class="form-label">Kode Member</label>
                                    <input type="text" class="form-control" id="kode_member" name="kode_member" required>
                                    <div class="invalid-feedback">
                                        Kode member wajib diisi!
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Baris 2: Nama Lengkap -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                    <div class="invalid-feedback">
                                        Namanya siapa nih?
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Baris 3: Password -->
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                        <div class="invalid-feedback">
                                            Buat password yang aman ya!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="confirmPw" class="form-label">Konfirmasi Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        <input type="password" class="form-control" id="confirmPw" name="confirmPw" required>
                                        <div class="invalid-feedback">
                                            Password harus sama!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Baris 4: Jenis Kelamin dan Kelas -->
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" name="jenis_kelamin" required>
                                        <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Kelas</label>
                                    <select class="form-select" name="kelas" required>
                                        <option value="" selected disabled>Pilih Kelas</option>
                                        <option value="X">X</option>
                                        <option value="XI">XI</option>
                                        <option value="XII">XII</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Baris 5: Jurusan -->
                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>
                                <select class="form-select" name="jurusan" required>
                                    <option value="" selected disabled>Pilih Jurusan</option>
                                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                                    <option value="TKJ">Teknik Komputer Jaringan</option>
                                    <option value="MM">Multimedia</option>
                                    <option value="TKRO">Teknik Kendaraan Ringan Otomotif</option>
                                    <option value="TBSM">Teknik Bisnis Sepeda Motor</option>
                                </select>
                            </div>
                            
                            <!-- Baris 6: No Telepon dan Tanggal Daftar -->
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label for="no_tlp" class="form-label">No Telepon</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        <input type="number" class="form-control" id="no_tlp" name="no_tlp" required>
                                        <div class="invalid-feedback">
                                            Nomor HP/WhatsApp kamu berapa?
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="tgl_pendaftaran" class="form-label">Tanggal Pendaftaran</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                        <input type="date" class="form-control" id="tgl_pendaftaran" name="tgl_pendaftaran" required>
                                        <div class="invalid-feedback">
                                            Pilih tanggal pendaftaran
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Tombol Submit -->
                            <div class="d-grid gap-2">
                                <button class="btn btn-register text-white" type="submit" name="signUp">
                                    <i class="fas fa-user-plus me-2"></i> Daftar Sekarang
                                </button>
                                <a href="sign_in.php" class="btn btn-outline-secondary">
                                    <i class="fas fa-sign-in-alt me-2"></i> Sudah Punya Akun? Login
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Pesan Error -->
                <?php if(isset($error)) : ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i> Ada yang salah nih, coba periksa lagi datanya!
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Script Validasi Form -->
    <script>
    (() => {
        'use strict'
        
        // Ambil semua form yang perlu divalidasi
        const forms = document.querySelectorAll('.needs-validation')
        
        // Loop dan cegat submit kalo form belum valid
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