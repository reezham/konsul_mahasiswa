<?php 
session_start();
if(isset($_SESSION['login'])){
	include "../koneksi.php";
	if($_GET['act']=='bayar'){

		$idspp 	= $_GET['id'];
		$nis	= $_GET['idmaha'];

		//membuat nomor pembayaran
		

		//tanggal Bayar
		

		//id admin
		$admin = 'Hadir';

		mysqli_query($konek, "UPDATE aju SET 
											Kehadiran='$admin'
									WHERE idaju='$idspp'");

		header('location:transaksi.php?id='.$nis);
	}
}
?>