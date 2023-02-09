<?php 
include '../koneksi.php';
include "navbar.php"; 
session_start();
$admin = $_SESSION['idw'];
$query = mysqli_query($konek,"SELECT * FROM jadwal where iddosen='$admin'");
?>
<html>
<head>
<title>Perkuliahan ATA</title>
</head>
<body >

<h3 align="center">Tambah Jadwal</h3>
<form method="post" action="simpan.php">
<table align="center">
<tr>
<td>Waktu Pelaksanaan</td>
<td>:</td>
<td><input type="date" name="waktu">
<select name="hari" id="">
					<option value="0">-Pilih hari Berangkat-</option>
					<option value="Senin">Senin</option>
					<option value="Selasa">Selasa</option>
					<option value="Rabu">Rabu</option>
					<option value="Kamis">Kamis</option>
					<option value="Jum'at">Jum'at</option>
					<option value="Sabtu">Sabtu</option>
					<option value="Minggu">Minggu</option>
</select>
				<input type="time" placeholder="Waktu keberangkatan" name="mulai"> 
- <input type="time" placeholder="Waktu keberangkatan" name="beres"></td></tr>
<tr>
<td>Semester</td>
<td>:</td>
<td><input type="text" name="semester" maxlength="10"></td>
</tr>

<tr>
<td>Konsultasi ke</td>
<td>:</td>
<td><input type="text" name="ke" maxlength="10"></td>
</tr>
<tr>
<td>Pembahasan</td>
<td>:</td>
<td><input type="text" name="bahas"></td>
</tr>

<tr>
<td>Kelas</td>
<td>:</td>
<td><select name="kelas" >
					<option value="">-Pilih Kelas-</option>
					<option value="reguler">Reguler</option>
					<option value="karyawan">Karyawan</option>
					
</select></td>
</tr>

<tr>
<td>Lokasi</td>
<td>:</td>
<td><input type="text" name="lokasi"></td>
</tr>

<tr>
			<td></td>
<td></td>
			<td><input type="submit" value="Simpan" /></td>
		</tr>

<tr>

</table>
</form>

<br><h3 align="center">Jadwal Konsultasi</h3>
<form action="" method="post">
   <table border="1" cellpadding="0" cellspacing="0" align="center">
        <tr>
            <th>No.</th>
<th width="100px">Kelas</th>
            <th width="160px">Waktu Konsultasi</th>
<th width="140px">Jam</th>
            <th width="80px">Semester</th>
            <th width="100px">Konsultasi ke</th>
<th>Pembahasan</th>
<th width="100px">Lokasi</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td align="center"><?php echo $no ?></td>
<td align="center"><?php echo $data["kelas"];?></td>            
<td align="center"><?php echo $data["hari"].",".$data["waktu"];?></td>
<td align="center"><?php echo $data["mulai"]."-".$data["beres"];?></td>            
<td align="center"><?php echo $data["semester"];?></td>
<td align="center"><?php echo $data["ke"];?></td>
<td align="center"><?php echo $data["bahas"];?></td>
<td align="center"><?php echo $data["lokasi"];?></td>            
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
</body>
</html>


