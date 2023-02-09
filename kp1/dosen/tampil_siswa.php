<?php include "navbar.php";
include '../koneksi.php';
 ?>

<h3>Data Mahasiswaiswa</h3>
<a href="tambah_siswa.php">Tambah Data</a>
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
	session_start();
	$admin = $_SESSION['idw'];
	$sql = mysqli_query($konek,"select * from mahasiswa where iddosen='$admin' ");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
			<td>$d[npm]</td>
			<td>$d[namasis]</td>
			<td>$d[jurusan]</td>
			<td>$d[semester]</td>
			<td>$d[thn_msk]</td>
			<td>
				<a href='transaksi.php?id=$d[idmaha]'>Detail</a>
			</td>
		</tr>";
		$no++;
	}
	?>
</table>



