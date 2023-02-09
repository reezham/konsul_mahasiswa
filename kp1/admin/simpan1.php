<?php
include '../koneksi.php';
	if($_SERVER['REQUEST_METHOD']=='POST'){
	//variabel dari elemen form
	$nama = $_POST['nama'];
$nip = $_POST['npm'];
$jurusan = $_POST['jurusan'];
$semester = $_POST['semester'];
$thn = $_POST['thn_msk'];
$password = $_POST['password'];
$kelas = $_POST['kelas'];
$doswal = $_POST['doswal'];
$level = $_POST['level'];
	
	if($nama=='' && $nip=='' && $password=='' && $level==''){
		echo "Form belum lengkap!!!";
	}else{
		//proses simpan data guru
		$simpan = mysqli_query($konek, "INSERT INTO mahasiswa(npm,namasis,jurusan,semester,thn_msk,password,kelas,iddosen,level) VALUES ('$nip','$nama','$jurusan','$semester','$thn','$password','$kelas','$doswal','$level')");

		if(!$simpan){
			echo "Simpan data gagal!!";
		}header('location:tampil_mahasiswa.php');
	}
}
	
?>