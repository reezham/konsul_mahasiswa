<?php
include "../koneksi.php";
include 'navbar.php';
$query = mysqli_query($konek,"SELECT * FROM matkul_maha ORDER by semester DESC");
?>
<style>
#si{
float: left;
    width: 600px;
    margin: 0 auto;
    padding: 10px;
}

#art {
float: right; width: 680px;
}
</style>
<div id=art>
<br><h3>Data Mata Kuliah</h3>
<form action="" method="post" >
   <table border="1" cellpadding="0" cellspacing="0" >
        <tr>
            <th>No</th>
            <th>Kode Matkul</th>
            <th >Nama</th>
            <th>Semester</th>
<th>SKS</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td align="center"><?php echo $no ?></td>
            <td align="center"><?php echo $data["kode_matkul"];?></td>
            <td align="center"><?php echo $data["nama"];?></td>
<td align="center"><?php echo $data["semester"];?></td>
<td align="center"><?php echo $data["sks"];?></td>
            
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
</div>

