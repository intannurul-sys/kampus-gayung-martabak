<?php
session_start();
session_unset();
session_destroy();

echo "<script>
        alert('Anda telah berhasil keluar dari SIAKAD.');
        window.location='index.php';
      </script>";
exit();
?>