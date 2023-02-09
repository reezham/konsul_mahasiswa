<?php include "navbar.php"; 
include "../koneksi.php";
session_start();
$nama = $_SESSION['idw'];
$sqlSiswa = mysqli_query($konek, "SELECT * FROM dosen  WHERE iddosen='$nama'");
	$ds=mysqli_fetch_array($sqlSiswa);
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h3>Selamat Datang <?php echo $ds['namalengkap']; ?> di Dashboard Aplikasi Konsultasi</h3>
<p>Anda telah login sebagai <b><?php echo "Dosen Wali" ?></b>.</p>
<p>Silahkan dikelola dengan baik ya....</p>
</body>
</html>