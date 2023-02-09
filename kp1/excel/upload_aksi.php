<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->
 
<?php 
// menghubungkan dengan koneksi
include_once ('../koneksi.php');
// menghubungkan dengan library excel reader
include_once ("reader.php");
?>
 
<?php
// upload file xls
$target = basename($_FILES['filepegawai']['name']) ;
move_uploaded_file($_FILES['filepegawai']['tmp_name'], $target);
 
// beri permisi agar file xls dapat di baca
chmod($_FILES['filepegawai']['name'],0777);
 
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filepegawai']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$npm     = $data->val($i, 1);
	$namasis   = $data->val($i, 2);
	$jurusan  = $data->val($i, 3);
	$semester     = $data->val($i, 4);
	$thn_msk     = $data->val($i, 5);
	$password    = $data->val($i, 6);
	$kelas     = $data->val($i, 7);
	$iddosen     = $data->val($i, 8);
	$level     = $data->val($i, 9);	

	if($nama != "" && $alamat != "" && $telepon != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($konek,"INSERT into mahasiswa values('','$npm','$namasis','$jurusan','$semester','$thn_msk','$password','$kelas','$iddosen','$level')");
		$berhasil++;
	}
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);
 
// alihkan halaman ke index.php
header("location:../admin/tampil_mahasiswa.php");
?>

