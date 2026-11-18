<?php
session_start();
include 'koneksi.php';

// Cek apakah user sudah login
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    echo "<script>
            alert('Silakan login terlebih dahulu!');
            window.location='index.php';
          </script>";
    exit();
}

// Ambil statistik dari database belajar_php
$q_mhs   = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM tabel_mahasiswa");
$tot_mhs = mysqli_fetch_assoc($q_mhs)['total'];

$q_kelas   = mysqli_query($koneksi, "SELECT COUNT(DISTINCT kode_kelas) AS total FROM kelas");
$tot_kelas = mysqli_fetch_assoc($q_kelas)['total'];

// Ambil daftar mahasiswa & mata kuliah
$data_mahasiswa = mysqli_query($koneksi, "SELECT * FROM tabel_mahasiswa ORDER BY nim ASC");
$data_kelas     = mysqli_query($koneksi, "SELECT DISTINCT kode_kelas, matakuliah, sks FROM kelas ORDER BY kode_kelas ASC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard SIAKAD - Kampus Gayung Martabak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --navy-primary: #0f2544;
            --gold-primary: #f59e0b;
        }
        body { background-color: #f8fafc; font-family: 'Inter', sans-serif; }
        .bg-navy { background-color: var(--navy-primary) !important; }
        .text-navy { color: var(--navy-primary) !important; }
        .text-gold { color: var(--gold-primary) !important; }
    </style>
</head>
<body>

    <!-- Navbar Dashboard -->
    <nav class="navbar navbar-dark bg-navy py-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="dashboard.php">
                <i class="bi bi-mortarboard-fill text-warning fs-4"></i>
                <span>SIAKAD GAYUNG MARTABAK</span>
            </a>
            <div class="d-flex align-items-center gap-3 text-white">
                <span class="small d-none sm-inline">
                    Halo, <strong class="text-warning text-capitalize"><?= htmlspecialchars($_SESSION['nama']); ?></strong> 
                    (<?= htmlspecialchars($_SESSION['role']); ?>)
                </span>
                <a href="index.php" class="btn btn-outline-light btn-sm rounded-pill px-3">Beranda</a>
                <a href="logout.php" class="btn btn-warning btn-sm rounded-pill px-3 fw-bold text-dark">
                    <i class="bi bi-box-arrow-right me-1"></i>Keluar
                </a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <!-- Kartu Statistik Database -->
        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted fw-semibold">Total Mahasiswa Terdaftar</small>
                            <h2 class="fw-bold text-navy mb-0 mt-1"><?= $tot_mhs; ?></h2>
                        </div>
                        <div class="bg-warning bg-opacity-25 text-warning p-3 rounded-3 fs-3">
                            <i class="bi bi-people-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted fw-semibold">Mata Kuliah Aktif</small>
                            <h2 class="fw-bold text-navy mb-0 mt-1"><?= $tot_kelas; ?></h2>
                        </div>
                        <div class="bg-primary bg-opacity-10 text-primary p-3 rounded-3 fs-3">
                            <i class="bi bi-journal-bookmark-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted fw-semibold">Hak Akses Login</small>
                            <h2 class="fw-bold text-success text-uppercase mb-0 mt-1"><?= htmlspecialchars($_SESSION['role']); ?></h2>
                        </div>
                        <div class="bg-success bg-opacity-10 text-success p-3 rounded-3 fs-3">
                            <i class="bi bi-shield-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Tabel Data Mahasiswa -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-header bg-navy text-white py-3 px-4 d-flex justify-content-between align-items-center">
                        <h6 class="mb-0 fw-bold"><i class="bi bi-person-lines-fill text-warning me-2"></i>Data Mahasiswa (Database)</h6>
                    </div>
                    <div class="table-responsive" style="max-height: 450px;">
                        <table class="table table-hover align-middle mb-0 small">
                            <thead class="table-light sticky-top">
                                <tr>
                                    <th class="ps-4">No</th>
                                    <th>NIM</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Jurusan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; while ($mhs = mysqli_fetch_assoc($data_mahasiswa)) : ?>
                                <tr>
                                    <td class="ps-4"><?= $no++; ?></td>
                                    <td class="fw-semibold text-navy"><?= htmlspecialchars($mhs['nim']); ?></td>
                                    <td><?= htmlspecialchars($mhs['nama']); ?></td>
                                    <td><span class="badge bg-secondary bg-opacity-10 text-dark"><?= htmlspecialchars($mhs['jurusan']); ?></span></td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tabel Data Mata Kuliah / Kelas -->
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-header bg-navy text-white py-3 px-4">
                        <h6 class="mb-0 fw-bold"><i class="bi bi-book-half text-warning me-2"></i>Daftar Mata Kuliah</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0 small">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-4">Kode</th>
                                    <th>Mata Kuliah</th>
                                    <th class="text-center">SKS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($kls = mysqli_fetch_assoc($data_kelas)) : ?>
                                <tr>
                                    <td class="ps-4 fw-bold text-navy"><?= htmlspecialchars($kls['kode_kelas']); ?></td>
                                    <td><?= htmlspecialchars($kls['matakuliah']); ?></td>
                                    <td class="text-center"><span class="badge bg-warning text-dark"><?= $kls['sks']; ?> SKS</span></td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>