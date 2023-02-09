<?php include "navbar.php"; ?>

<h3>Data Users</h3>
<a href="">Tambah Data</a>
<table border="1">
	<tr>
		<th>No.</th>
		<th>Username</th>
		<th>Password</th>
		
	</tr>

	<?php 
	$sql = mysqli_query($konek,"select * from users order by level asc");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
			<td>$d[username]</td>
			<td>$d[password]</td>
			
			<td>
				<a href='edit_siswa.php?id=$d[id]'>Edit</a> /
				<a href='hapus_siswa.php?id=$d[id]'>Hapus</a>
			</td>
		</tr>";
		$no++;
	}
	?>
</table>

<p>Menghapus siswa berarti juga menghapus tagihan siswa...</p>

