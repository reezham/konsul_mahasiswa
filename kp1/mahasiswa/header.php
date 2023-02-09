<?php
session_start();
if(!isset($_SESSION['login'])){
	header('location:login.php');
}

include "../koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pembayaran SPP</title>
</head>
<body>
<h3>Aplikasi Pembayaran SPP</h3>
<hr/>
<a href="index.php">Beranda</a> |

<a href="jadwal.php">Jadwal</a> |

<a href="matkul.php">Matkul</a> |
<a href="khs2.php">KHS</a> |
<a href="hitung.php">Laporan</a> |
<a href="tentang.php">Tentang</a> |
<a href="../logout.php">Logout</a>
<hr/>