<?php include "navbar.php"; 
include '../koneksi.php';
?>

<h3>Tambah Data Dosen Wali</h3>
<form method="post" action="">
	<table>
		<tr>
			<td>Nama Dosen Wali</td>
			<td><input type="text" name="nama" /></td>
		</tr>
<tr>
			<td>NIP</td>
			<td><input type="text" name="nip" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" /></td>
		</tr>
		<tr> <td>Level</td>
                        <td><input type="text" name="level" value="doswal" readonly /></td></tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan" /></td>
		</tr>
	</table>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	//variabel dari elemen form
	$nama = $_POST['nama'];
$nip = $_POST['nip'];
$password = $_POST['password'];
$level = $_POST['level'];
	
	if($nama=='' && $nip=='' && $password=='' && $level==''){
		echo "Form belum lengkap!!!";
	}else{
		//proses simpan data guru
		$simpan = mysqli_query($konek, "INSERT INTO dosen(nama,nip,password,level) VALUES ('$nama','$nip','$password','$level')");
		
		if(!$simpan && !$sim){
			echo "Simpan data gagal!!";
		}else{
			header('location:tampil_dosen.php');
		}
	}
}
?>
