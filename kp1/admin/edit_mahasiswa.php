<?php include "navbar.php"; 
include "../koneksi.php";
?>

<?php
$sqlEdit = mysqli_query($konek, "SELECT * FROM mahasiswa WHERE idmaha='$_GET[id]'");
$e=mysqli_fetch_array($sqlEdit);
?>

<h3>Edit Data Mahasiswa</h3>
<form method="post" action="">
	<input type="hidden" name='id' value="<?php echo $e['idmaha']; ?>" />
	<table>
		<tr>
			<td>NIS</td>
			<td><input type="text" name="npm" value="<?php echo $e['npm']; ?>" maxlength="10"></td>
		</tr>
		<tr>
			<td>Nama Siswa</td>
			<td><input type="text" name="nama" value="<?php echo $e['namasis']; ?>" maxlength="40"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>
				<select name="jurusan">
					<option value="" selected>- Pilih Jurusan -</option>
					
                            <option value="Informatika">Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Manajemen">Manajemen</option>
                            <option value="Psikologi">Psikologi</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Semester</td>
			<td><select name="semester" id="semester" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
				<option value="6">6</option>
<option value="8">7</option>
<option value="8">8</option>
                        </select></td>
		</tr>
		<tr>
			<td>Tahun Ajaran</td>
			<td><input type="text" name="thn_msk" ></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" value="Update" /></td>
		</tr>
	</table>
</form>

<!-- proses edit data -->
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

	//variabel untuk menampung inputan dari form
	$id 	= $_POST['id'];
	$nis 	= $_POST['npm'];
	$nama 	= $_POST['nama'];
	$kelas 	= $_POST['jurusan'];
	$tahun 	= $_POST['semester'];
	$biaya 	= $_POST['thn_msk'];
	

	if($nis=='' || $nama =='' || $kelas==''){
		echo "Form Belum lengkap....";
	}else{
		$update = mysqli_query($konek, "UPDATE mahasiswa SET npm='$nis',
											namasis='$nama',
											jurusan='$kelas',
											semester='$tahun',
											thn_msk='$biaya'
												
										WHERE idmaha='$id'");

		

		if(!$update ){
			echo "Update data gagal...";

		}
	}
}
?>

