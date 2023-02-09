<?php
include "../koneksi.php";
include 'navbar.php';

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
<?php
$query = mysqli_query($konek,"SELECT * FROM matkul WHERE semester=6");
?>
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
<br><br>
<br><h3>Data Mata Kuliah</h3>
<form action="" method="post" >
<?php
$query = mysqli_query($konek,"SELECT * FROM matkul WHERE semester=4");
?>
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


<div id=si>

    
                <h3>Tambah Mata Kuliah</h3>
  <table >

         

            <div class="col-6 offset-3">
                <form action="simpan2.php" method="post">
<tr><div class="form-group">

                        <td><label for="kode_matkul">Kode Matkul</label></td>
                        <td><input type="text" name="kode_matkul" class="form-control" id="kode_matkul" placeholder="ID">
                    </td></div></tr>
<tr><div class="form-group">
                        <td><label for="nama">Nama Matkul</label></td>
                        <td><input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                    </td></div></tr>
<tr><div class="form-group">
                        <td><label for="semester">Semester</label></td>
                        <td><input type="text" name="semester" class="form-control" id="semester" placeholder="Semester">
                    </td></div></tr>
                    <tr><div class="form-group">
                        <td><label for="sks">SKS</label></td>
                        <td><input type="text" name="sks" class="form-control" id="sks" aria-describedby="Nama" placeholder="SKS">
                    <td></div></tr>
                    
                    

<tr>
<td></td>
                    <td><button type="submit" class="btn btn-primary">Simpan</button></td></tr>
                </form>
            </div>





</tr>
</table>
</div>