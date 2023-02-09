<?php include "navbar.php" ;
include "../koneksi.php";
?>

<h3>Histori Konsultasi Mahasiswa</h3>


<?php
session_start();
	$admin = $_SESSION['idw'];
	
if(isset($_GET['id']) ){
	$sqlSiswa = mysqli_query($konek, "SELECT a.*,b.* FROM mahasiswa a, dosen b WHERE a.idmaha='$_GET[id]' AND a.iddosen=b.iddosen AND a.iddosen='$admin'");
	$ds=mysqli_fetch_array($sqlSiswa);
	$nis = $ds['idmaha'];
?>

<h3>Biodata Mahasiswa</h3>
<table>
	<tr>
		<td>NPM</td>
		<td>:</td>
		<td><?php echo $ds['npm']; ?></td>
	</tr>
	<tr>
		<td>Nama Mahasiswa</td>
		<td>:</td>
		<td><?php echo $ds['namasis']; ?></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><?php echo $ds['kelas']; ?></td>
	</tr>
	<tr>
		<td>Semester</td>
		<td>:</td>
		<td><?php echo $ds['semester']; ?></td>
	</tr>
<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td><?php echo $ds['jurusan']; ?></td>
	</tr>
	<tr>
		<td>Dosen Wali</td>
		<td>:</td>
		<td><?php echo $ds['nama']; ?></td>
	</tr>
	<form action="tampil_siswa.php">
	<tr>
	<td></td>
			<td></td>
			<td><input type="submit" value="Kembali" /></td>
		</tr>
		</form>
</table>

<h3>Pengajuan Konsultasi Mahasiswa</h3>
<table border="1">
	<tr>
		<th>No</th>
		<th>Waktu</th>
		<th>Jam</th>
		<th>Pembahasan</th>
		<th>Kehadiran</th>
		<th>Present</th>
		
	</tr>

	<?php
	$sql = mysqli_query($konek, "SELECT * FROM aju WHERE idmaha='$ds[idmaha]' ORDER BY waktu ASC");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
			<td>$d[waktu]</td>
			<td>$d[jam]</td>
			<td>$d[bahas]</td>
			<td>$d[Kehadiran]</td>
			<td align='center'>";
				if($d['Kehadiran']==''){
					echo "<a href='proses_transaksi.php?idmaha=$nis&act=bayar&id=$d[idaju]'>Hadir</a>";
				}else{
					echo "-";
				}
			echo "</td>
		</tr>";
		$no++;
	}
	?>
</table>


<?php
}
?>

