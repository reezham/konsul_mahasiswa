<?php
include "../koneksi.php";
include 'navbar.php';
$query = mysqli_query($konek,"SELECT * FROM file ORDER by file DESC");
?>

<div id=art>
<br><h3>Data File KHS</h3>
<form action="" method="post" >
   <table border="1" cellpadding="0" cellspacing="0" >
        <tr>
            <th>No</th>
            <th>File</th>
            <th>Download</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td align="center"><?php echo $no ?></td>
            <td align="center"><?php echo $data["file"];?></td>
            <td><a href="download.php?filename=<?=$data['file']?>">Download</a></td> 
            
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
</div>

