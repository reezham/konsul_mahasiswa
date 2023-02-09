<?php include "navbar.php"; 
include "../koneksi.php";
session_start();
$nama = $_SESSION['ids'];
$sqlSiswa = mysqli_query($konek, "SELECT * FROM mahasiswa  WHERE idmaha='$nama'");
	$ds=mysqli_fetch_array($sqlSiswa);
?>

<html>
<head>

</head>
<body>
<h3>Selamat Datang <?php echo $ds['namalengkap']; ?> di Dashboard Aplikasi Konsultasi</h3>
<p>Anda telah login sebagai <b><?php echo "Mahasiswa" ?></b>.</p>
<p>Silahkan dikelola dengan baik ya....</p>
</body>
</html>


