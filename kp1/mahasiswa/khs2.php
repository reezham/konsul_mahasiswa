<?php
include 'navbar.php';
?>
<h3>Upload KHS</h3>

<form action="" method="POST" enctype="multipart/form-data">
<b>File Upload</b> <input type="file" name="khs">
<input type="submit" name="proses" value="Upload">
</form>

<?php
include '../koneksi.php';

if(isset($_POST['proses'])){

$direk = "../berkas/";
$file = $_FILES['khs']['name'];
move_uploaded_file($_FILES['khs']['tmp_name'],$direk.$file);

mysqli_query($konek, "insert into file set file='$file'");

echo "<b>File berhasil diupload";
}
?>