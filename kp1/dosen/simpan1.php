<?php
include '../koneksi.php';
	if($_SERVER['REQUEST_METHOD']=='POST'){
	//variabel dari elemen form
session_start();
$admin = $_SESSION['id'];
	$nama = $_POST['waktu'];
$nip = $_POST['hari'];
$jurusan = $_POST['mulai'];
$semester = $_POST['beres'];
$thn = $_POST['semester'];
$password = $_POST['ke'];
$kelas = $_POST['bahas'];
$doswal = $_POST['kelas'];
$lokasi = $_POST['lokasi'];

	
	if($nama=='' && $nip=='' && $password=='' && $lokasi==''){
		echo "Form belum lengkap!!!";
	}else{
		//proses simpan data guru
		$simpan = mysqli_query($konek, "INSERT INTO jadwal(waktu,semester,ke,bahas,hari,mulai,beres,kelas,iddosen) VALUES ('$nama','$thn','$password','$kelas','$nip','$jurusan,'$semester','$doswal','$admin')");
		
		if(!$simpan){
			echo "Simpan data gagal!!";
		}else{
			header('location:jadwal.php');
		}
	}
}
	
?>