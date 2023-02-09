<?php
$koneksi = mysqli_connect("localhost","root","","kp");
if(!$koneksi){
    echo "koneksi gagal";
}
mysqli_select_db($koneksi,"kp");
$id = $_POST["kode_matkul"];
$nama = $_POST["nama"];
$semester = $_POST["semester"];
$sks = $_POST["sks"];

$string = "INSERT INTO matkul(kode_matkul,nama,semester,sks) VALUES ('$id', '$nama','$semester','$sks')";
mysqli_query($koneksi,$string);
header('Location: '.'matkul.php');
?>