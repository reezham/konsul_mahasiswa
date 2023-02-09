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
<a href="tampil_users.php">Data Users</a> |
<a href="tampil_admin.php">Data Admin</a> |
<a href="tampil_guru.php">Data Dosen Wali</a> |

<a href="tampil_siswa.php">Data Mahaiswa</a> |
<a href="matkul.php">Mata Kuliah</a> |
<a href="jadwal.php">Jadwal</a> |
<a href="transaksi.php">Transaksi</a> |
<a href="hitung.php">Laporan</a> |
<a href="tentang.php">Tentang</a> |
<a href="../logout.php">Logout</a>
<hr/>