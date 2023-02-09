<?php
include "../koneksi.php";
include 'header.php';

?>
<h2 align="center">Kartu Hasil Studi Mahasiswa</h2>
<br>
<table >
<tr>
<td width="120px">Nama :</td>
<td width="650px"></td>
<td width="120px">Semester :</td>
</tr>

<tr>
<td>NPM :</td>
<td></td>
<td>Angkatan :</td>
</tr>
</table>

<br>

<table>
<tr>
<td>
<div id=art>
<h3>Semester 1</h3>

<form action="" method="post" >
<?php
$query = mysqli_query($konek,"SELECT * FROM matkul where semester=1");
?>
   <table border="1" cellpadding="0" cellspacing="0" >
        <tr>
            <th>No</th>
            <th width="120px">Kode Matkul</th>
            <th width="250px">Nama</th>
            <th width="120px">Semester</th>
		<th width="80px">SKS</th>
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
</td>

<td width="80px"></td>

<td>
<div id=si>
<h3>Semester 2</h3>
<form action="" method="post" >
<?php
$query = mysqli_query($konek,"SELECT * FROM matkul where semester=2");
?>
   <table border="1" cellpadding="0" cellspacing="0" >
        <tr>
            <th>No</th>
            <th width="120px">Kode Matkul</th>
            <th width="250px">Nama</th>
            <th width="120px">Semester</th>
		<th width="80px">SKS</th>
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
</td>
</tr>



<tr>
<td>
<div id=art>
<h3>Semester 3</h3>
<form action="" method="post" >
<?php
$query = mysqli_query($konek,"SELECT * FROM matkul where semester=3");
?>
   <table border="1" cellpadding="0" cellspacing="0" >
        <tr>
            <th>No</th>
            <th width="120px">Kode Matkul</th>
            <th width="250px">Nama</th>
            <th width="120px">Semester</th>
		<th width="80px">SKS</th>
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
</td>

<td></td>

<td>
<div id=si>
<h3>Semester 4</h3>
<form action="" method="post" >
<?php
$query = mysqli_query($konek,"SELECT * FROM matkul where semester=4");
?>
   <table border="1" cellpadding="0" cellspacing="0" >
        <tr>
            <th>No</th>
            <th width="120px">Kode Matkul</th>
            <th width="250px">Nama</th>
            <th width="120px">Semester</th>
		<th width="80px">SKS</th>
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
</td>
</tr>

<tr>
<td>
<div id=art>
<h3>Semester 5</h3>
<form action="" method="post" >
<?php
$query = mysqli_query($konek,"SELECT * FROM matkul where semester=5");
?>
   <table border="1" cellpadding="0" cellspacing="0" >
        <tr>
            <th>No</th>
            <th width="120px">Kode Matkul</th>
            <th width="250px">Nama</th>
            <th width="120px">Semester</th>
		<th width="80px">SKS</th>
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
</td>

<td></td>

<td>
<div id=si>
<h3>Semester 6</h3>
<form action="" method="post" >
<?php
$query = mysqli_query($konek,"SELECT * FROM matkul where semester=6");
?>
   <table border="1" cellpadding="0" cellspacing="0" >
        <tr>
            <th>No</th>
            <th width="120px">Kode Matkul</th>
            <th width="250px">Nama</th>
            <th width="120px">Semester</th>
		<th width="80px">SKS</th>
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
</td>
</tr>

<tr>
<td>
<div id=art>
<br><h3>Semester 7</h3>
<form action="" method="post" >
<?php
$query = mysqli_query($konek,"SELECT * FROM matkul where semester=7");
?>
   <table border="1" cellpadding="0" cellspacing="0" >
        <tr>
            <th>No</th>
            <th width="120px">Kode Matkul</th>
            <th width="250px">Nama</th>
            <th width="120px">Semester</th>
		<th width="80px">SKS</th>
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
</td>

<td></td>

<td>
<div id=si>
<br><h3>Semester 8</h3>
<form action="" method="post" >
<?php
$query = mysqli_query($konek,"SELECT * FROM matkul where semester=8");
?>
   <table border="1" cellpadding="0" cellspacing="0" >
        <tr>
            <th>No</th>
            <th width="120px">Kode Matkul</th>
            <th width="250px">Nama</th>
            <th width="120px">Semester</th>
		<th width="80px">SKS</th>
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
</td>
</tr>

<tr>
<td></td>
<td></td>
<td align="right"><a href="print.php" target="_BLANK">PRINT</a></td>
</tr>
<br>



