<?php
session_start();
include 'koneksi.php';

$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
$cek   = mysqli_num_rows($query);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($query);

    if ($password == $data['password']) {
        // Wajib menyimpan data ke $_SESSION agar dikenali oleh dashboard.php
        $_SESSION['id_user']  = $data['id_user'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama']     = $data['nama'];
        $_SESSION['role']     = $data['role'];
        $_SESSION['status']   = "login";

        header("location:dashboard.php");
        exit();
    } else {
        echo "<script>
                alert('Password salah!');
                window.location='index.php';
              </script>";
    }
} else {
    echo "<script>
            alert('Username tidak ditemukan!');
            window.location='index.php';
          </script>";
}
?>