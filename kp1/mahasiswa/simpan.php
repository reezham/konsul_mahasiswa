<?php
$koneksi = mysqli_connect("localhost","root","","kp");
if(!$koneksi){
    echo "koneksi gagal";
}
mysqli_select_db($koneksi,"kp");
session_start();
$admin = $_SESSION['ids'];
$id = $_POST["waktu"];

$sks = $_POST["bahas"];

$mulai = $_POST["mulai"];

$string = "INSERT INTO aju(waktu,jam,bahas,idmaha) VALUES ('$id','$mulai','$sks','$admin')";
mysqli_query($koneksi,$string);
header('Location: '.'jadwal.php');
?>