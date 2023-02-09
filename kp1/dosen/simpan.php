<?php
$koneksi = mysqli_connect("localhost","root","","kp");
if(!$koneksi){
    echo "koneksi gagal";
}
mysqli_select_db($koneksi,"kp");
session_start();
$admin = $_SESSION['id'];
$id = $_POST["waktu"];
$nama = $_POST["semester"];
$semester = $_POST["ke"];
$sks = $_POST["bahas"];
$lok = $_POST["lokasi"];
$hari = $_POST["hari"];
$mulai = $_POST["mulai"];
$beres = $_POST["beres"];
$kelas = $_POST["kelas"];
$string = "INSERT INTO jadwal(waktu,semester,ke,bahas,hari,mulai,beres,kelas,iddosen,lokasi) VALUES ('$id', '$nama','$semester','$sks','$hari','$mulai','$beres','$kelas','$admin','$lok')";
mysqli_query($koneksi,$string);
header('Location: '.'jadwal.php');
?>