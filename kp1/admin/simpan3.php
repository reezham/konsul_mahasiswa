<?php
include '../koneksi.php';
	if($_SERVER['REQUEST_METHOD']=='POST'){
	//variabel dari elemen form
	$nama = $_POST['nama'];
$nip = $_POST['nip'];
$password = md5($_POST['password']);
$level = $_POST['level'];
	
	if($nama=='' && $nip=='' && $password=='' && $level==''){
		echo "Form belum lengkap!!!";
	}else{
		//proses simpan data guru
		$simpan = mysqli_query($konek, "INSERT INTO dosen(nip,nama,password) VALUES ('$nip','$nama','$password')");
		$sim = mysqli_query($konek, "INSERT INTO users(username,password,level) VALUES ('$nip','$password','$level')");
		if(!$simpan && !$sim){
			echo "Simpan data gagal!!";
		}else{
			header('location:tampil_doswal.php');
		}
	}
}
	
?>