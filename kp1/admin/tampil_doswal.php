<?php include "navbar.php"; ?>

<h3>Data dosen</h3>
<a href="tambah_doswal.php">Tambah Data</a>
<table border="1">
	<tr>
		<th>No</th>
<th>NIP</th>
		<th>Nama Guru</th>
		<th>Aksi</th>
	</tr>
	<?php
	include '../koneksi.php';
	$sql=mysqli_query($konek, "SELECT * FROM dosen where iddosen");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
<td>$d[nip]</td>
			<td>$d[nama]</td>
			<td>
				<a href='edit_doswal.php?id=$d[iddosen]'>Edit</a> /
				<a href='hapus_doswal.php?id=$d[iddosen]'>Hapus</a>
			</td>
		</tr>";
		$no++;
	}
	?>
</table>

