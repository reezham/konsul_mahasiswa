<?php include "navbar.php"; 
include '../koneksi.php';?>

<h3>Data Dosen Wali</h3>
<a href="tambah_dosen.php">Tambah Data</a>
<table border="1" >
	<tr>
		<th>No</th>
		<th>Nama Dosen Wali</th>
<th>Username</th>
		<th>Aksi</th>
	</tr>
	<?php
	$sql=mysqli_query($konek, "SELECT * FROM dosen ORDER BY iddosen ASC");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
			<td>$d[nip]</td>
<td>$d[nama]</td>
			<td>
				<a href='edit_dosen.php?id=$d[iddosen]'>Edit</a> /
				<a href='hapus_dosen.php?id=$d[iddosen]'>Hapus</a>
			</td>
		</tr>";
		$no++;
	}
	?>
</table>

