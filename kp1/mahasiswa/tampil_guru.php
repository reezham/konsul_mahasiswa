<?php include "header.php"; ?>

<h3>Data Guru</h3>
<a href="tambah_guru.php">Tambah Data</a>
<table border="1">
	<tr>
		<th>No</th>
<th>NIP</th>
		<th>Nama Guru</th>
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
				<a href='edit_guru.php?id=$d[iddosen]'>Edit</a> /
				<a href='hapus_guru.php?id=$d[iddosen]'>Hapus</a>
			</td>
		</tr>";
		$no++;
	}
	?>
</table>

<?php include "footer.php"; ?>