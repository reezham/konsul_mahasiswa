<?php
session_start();
if(isset($_SESSION['login'])){
	include "../koneksi.php";
	$hapus = mysqli_query($konek, "DELETE FROM mahasiswa WHERE idmaha='$_GET[id]'");
	
	if($hapus){
		header('location:tampil_mahasiswa.php');
	}else{
		echo "Hapus data gagal, data guru digunakan di tabel wali kelas<br>
			<a href='tampil_mahasiswa.php'><<< Kembali</a>";
	}
}else{
	echo "Anda tidak memiliki akses ke halaman ini!!!";
}
?>