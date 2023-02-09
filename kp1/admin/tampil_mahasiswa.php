<?php include "navbar.php"; 
include '../koneksi.php';
?>

<h3>Data Mahasiswa</h3>
<a href="../excel/upload.php">Upload Data Excel Mahasiswa</a>
<table border="1">
	<tr>
		<th>No.</th>
		<th>NPM</th>
		<th>Nama Mahasiswa</th>
		<th>Jurusan</th>
		<th>Semester</th>
		<th>Tahun Masuk</th>
		<th>Aksi</th>
	</tr>

	<?php 
	$sql = mysqli_query($konek,"select * from mahasiswa order by semester asc");
	$no=1;
	while($q=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
			<td>$q[npm]</td>
			<td>$q[namasis]</td>
			<td>$q[jurusan]</td>
			<td>$q[semester]</td>
			<td>$q[thn_msk]</td>
			<td>
				<a href='edit_mahasiswa.php?id=$q[idmaha]'>Edit</a> /
				<a href='hapus_mahasiswa.php?id=$q[idmaha]'>Hapus</a>
			</td>
		</tr>";
		$no++;
	}
	?>
</table>



