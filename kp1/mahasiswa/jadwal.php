<?php 
include '../koneksi.php';
include "navbar.php"; 
session_start();
$admin = $_SESSION['ids'];
$query    =mysqli_query($konek, "SELECT a.*,b.* FROM mahasiswa a, dosen b WHERE a.iddosen=b.iddosen AND a.idmaha='$admin'");
				$ds=mysqli_fetch_array($query );
				$nis = $ds['npm'];
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

<input type="time" placeholder="Waktu keberangkatan" name="mulai"> 
</td></tr>

<tr>
<td>Pembahasan</td>
<td>:</td>
<td><input type="text" name="bahas"></td>
</tr>

<tr>
			<td>Dosen Wali</td>
			<td>: </td>
			<td><option name="doswal" value="<?=$ds['iddosen'];?>"><?php echo $ds['nama'];?></option></td>
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

            <th width="160px">Waktu Konsultasi</th>
<th width="140px">Jam</th>

<th>Pembahasan</th>

        </tr>
        <?php 
		$query = mysqli_query($konek,"SELECT * FROM aju where idmaha='$admin'");
		if(mysqli_num_rows($query)>0){ ?>
        <?php
		
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td align="center"><?php echo $no ?></td>
         
<td align="center"><?php echo $data["waktu"];?></td>
<td align="center"><?php echo $data["jam"];?></td>            


<td align="center"><?php echo $data["bahas"];?></td>
           
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
</body>
</html>


