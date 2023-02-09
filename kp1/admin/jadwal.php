<?php 
include '../koneksi.php';
include "navbar.php"; 
$query = mysqli_query($konek,"SELECT * FROM jadwal ORDER BY idjad DESC");
?>
<html>
<head>
<title>Perkuliahan </title>
</head>
<body >



<br><h3 align="center">Jadwal Konsultasi</h3>
<form action="" method="post">
   <table border="1" cellpadding="0" cellspacing="0" align="center">
        <tr>
            <th>No.</th>
            <th>Waktu Konsultasi</th>
<th>Jam</th>
            <th>Semester</th>
            <th>Konsultasi ke</th>
<th>Pembahasan</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td align="center"><?php echo $no ?></td>
            <td align="center"><?php echo $data["hari"].",".$data["waktu"];?></td>
<td align="center"><?php echo $data["mulai"]."-".$data["beres"];?></td>            
<td align="center"><?php echo $data["semester"];?></td>
<td align="center"><?php echo $data["ke"];?></td>
<td align="center"><?php echo $data["bahas"];?></td>
            
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
</body>
</html>


