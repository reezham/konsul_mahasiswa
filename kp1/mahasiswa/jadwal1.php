<?php 
include '../koneksi.php';
include "navbar.php"; 
session_start();
$admin = $_SESSION['ids'];
$query = mysqli_query($konek,"SELECT * FROM jadwal where iddosen='$admin'");
?>
<html>
<head>
<title>Perkuliahan ATA</title>
</head>
<body >

<h3 align="center">Jadwal Konsultasi</h3>
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


