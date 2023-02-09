<?php include "navbar.php"; 
include '../koneksi.php';
?>

<h3>Tambah Data Dosen</h3>
<form method="post" action="simpan3.php">
	<table>
		<tr>
			<td>Nama Dosen</td>
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

