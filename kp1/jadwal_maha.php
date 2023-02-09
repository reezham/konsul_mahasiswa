<?php 
include '../koneksi.php';
include "header.php"; 

?>
<html>
<head>
<title>Perkuliahan ATA</title>
</head>
<body >



<br><h3 align="center">Jadwal Konsultasi</h3>
<form method="get" action="" align="center">
	<p>Kelas: <select name="kelas" style="width:160px;">
                <?php
                include "koneksi.php";
                //query menampilkan nama unit kerja ke dalam combobox
                $query    =mysqli_query($konek, "SELECT * FROM jadwal GROUP BY kelas ORDER BY kelas");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['kelas'];?>"><?php echo $data['kelas'];?></option>
                <?php
                }
                ?>
            </select>
<select name="semester" style="width:160px;">
                <?php
                include "koneksi.php";
                //query menampilkan nama unit kerja ke dalam combobox
                $query    =mysqli_query($konek, "SELECT * FROM jadwal GROUP BY semester ORDER BY semester");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['semester'];?>"><?php echo $data['semester'];?></option>
                <?php
                }
                ?>
            </select>
            <input type="submit" value="Pilih">
<a href="jadwal.php">Refresh</a></p>
</form>



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
        </tr>
        <?php
            if (isset($_GET['kelas']) && isset($_GET['semester'])) {
                $unit_kerja=trim($_GET['kelas']);
		$unit=trim($_GET['semester']);
                
                //menampilkan pegawai berdasarkan unit kerja yang dipilih pada combobox
                $tamPeg=mysqli_query($konek, "SELECT * FROM jadwal WHERE kelas='$unit_kerja' and semester='$unit'");
            
                $no=0;
                while ($data = mysqli_fetch_array($tamPeg)) {
                $no++;
                ?>
        <tr>
            <td align="center"><?php echo $no ?></td>
<td align="center"><?php echo $data["kelas"];?></td>  
            <td align="center"><?php echo $data["hari"].",".$data["waktu"];?></td>
<td align="center"><?php echo $data["mulai"]."-".$data["beres"];?></td>            
<td align="center"><?php echo $data["semester"];?></td>
<td align="center"><?php echo $data["ke"];?></td>
<td ><?php echo $data["bahas"];?></td>
            
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
</body>
</html>


