<?php include "navbar.php"; 
include '../koneksi.php';?>
<html>
<head>

</head>
<body>
<h3>Data Admin</h3>
<a href="tambah_admin.php">Tambah Data</a>
<table border="1" >
	<tr>
		<th>No</th>
		<th>Nama Admin</th>
<th>Username</th>
		<th>Aksi</th>
	</tr>
	<?php
	$sql=mysqli_query($konek, "SELECT * FROM admin ORDER BY idadmin ASC");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
			<td>$d[namalengkap]</td>
<td>$d[username]</td>
			<td>
				<a href='edit_guru.php?id=$d[idadmin]'>Edit</a> /
				<a href='hapus_admin.php?id=$d[idadmin]'>Hapus</a>
			</td>
		</tr>";
		$no++;
	}
	?>
</table>
</body>
</html>
