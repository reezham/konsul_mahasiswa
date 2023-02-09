<?php include "navbar.php"; 
include '../koneksi.php';
?>

<h3>Tambah Data Admin</h3>
<form method="post" action="">
	<table>
		<tr>
			<td>Nama Admin</td>
			<td><input type="text" name="nama" /></td>
		</tr>
<tr>
			<td>Username</td>
			<td><input type="text" name="nip" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" /></td>
		</tr>
		<tr> <td>Level</td>
                        <td><input type="text" name="level" value="admin" readonly /></td></tr>
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
		$simpan = mysqli_query($konek, "INSERT INTO admin(namalengkap,username,password) VALUES ('$nama','$nip','$password')");
		$sim = mysqli_query($konek, "INSERT INTO users(username,password,level) VALUES ('$nip','$password','$level')");
		if(!$simpan && !$sim){
			echo "Simpan data gagal!!";
		}else{
			header('location:tampil_admin.php');
		}
	}
}
?>
