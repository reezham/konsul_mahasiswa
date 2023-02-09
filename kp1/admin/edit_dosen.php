<?php include "navbar.php"; 
include '../koneksi.php'; ?>

<?php
$sqlEdit=mysqli_query($konek, "SELECT * FROM dosen WHERE iddosen='$_GET[id]'");
$e=mysqli_fetch_array($sqlEdit);
?>
<h3>Edit Data Dosen</h3>
<form method="post" action="">
	<input type="hidden" name="idguru" value="<?php echo $e['iddosen']; ?>" />
	<table>
		<tr>
			<td>Nama Guru</td>
			<td><input type="text" name="namaguru" value="<?php echo $e['nama']; ?>" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Update" /></td>
		</tr>
	</table>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	//variabel dari elemen form
	$id		= $_POST['idguru'];
	$nama 	= $_POST['namaguru'];
	
	if($nama==''){
		echo "Form belum lengkap!!!";
	}else{
		//proses edit data guru
		$edit = mysqli_query($konek, "UPDATE dosen SET nama='$nama' WHERE iddosen='$id'");
		
		if(!$edit){
			echo "Edit data gagal!!";
		}else{
			header('location:tampil_doswal.php');
		}
	}
}
?>

