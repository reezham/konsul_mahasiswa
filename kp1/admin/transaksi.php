<?php include "navbar.php" ?>

<h3 align="center">Transaksi Pembayaran</h3>
<form method="get" action="" align="center">
	NIS: <input type="text" name="npm" />
	<input type="submit" name="cari" value="Cari Siswa" />
</form>

<?php
if(isset($_GET['npm']) && $_GET['npm']!=''){
	$sqlSiswa = mysqli_query($konek, "SELECT * FROM mahasiswa WHERE npm='$_GET[npm]'");
	$ds=mysqli_fetch_array($sqlSiswa);
	$nis = $ds['npm'];
?>

<h3 align="center">Biodata Siswa</h3>
<table style="margin-left:auto;margin-right:auto">
	<tr>
		<td>NIS</td>
		<td>:</td>
		<td><?php echo $ds['npm']; ?></td>
	</tr>
	<tr>
		<td>Nama Siswa</td>
		<td>:</td>
		<td><?php echo $ds['nama']; ?></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><?php echo $ds['jurusan']; ?></td>
	</tr>
	<tr>
		<td>Tahun Ajaran</td>
		<td>:</td>
		<td><?php echo $ds['semester']; ?></td>
	</tr>
</table>

<h3 align="center">Tagihan Pembayaran Semester</h3>
<table border="1" style="margin-left:auto;margin-right:auto">
	<tr>
		<th>No</th>
		<th>Semester</th>
		
		<th>No. Bayar</th>
		<th>Tgl. Bayar</th>
		<th>Jumlah</th>
		<th>Keterangan</th>
		<th>Bayar</th>
	</tr>

	<?php
	$sql = mysqli_query($konek, "SELECT * FROM bayar WHERE id='$ds[id]' ORDER BY semester ASC");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
			<td>$d[semester]</td>
			
			<td>$d[nobayar]</td>
			<td>$d[tglbayar]</td>
			<td>$d[jumlah]</td>
			<td>$d[ket]</td>
			<td align='center'>";
				if($d['nobayar']==''){
					echo "<a href='proses_transaksi.php?npm=$nis&act=bayar&id=$d[idbay]'>Bayar</a>";
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



