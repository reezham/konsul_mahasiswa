<!DOCTYPE html>
<html>
<head>
	<title>Login Aplikasi Konsultasi</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h3 align="center">Silahkan Login Menggunakan Username dan Password Anda</h3>
<hr/>
<div id="container">
<form method="post" action="">
            <label for="fname">Username:</label>
            <input type="text" name="username" placeholder="Masukan Username">
            <label for="lname">Password:</label>
            <input type="password" name="password" placeholder="Masukan Password">
            <input type="submit" value="Login">
            <input type="reset" value="Reset">
</form>
</div>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	//variabel untuk menyimpan kiriman dari form
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	if($user=='' || $pass==''){
		echo "Form belum lengkap!!";
	}else{
		include "koneksi.php";
		$sqlLogin = mysqli_query($konek, "SELECT * FROM admin 
						WHERE username='$user' AND password='$pass'");
		$jml = mysqli_num_rows($sqlLogin);
		$d=mysqli_fetch_array($sqlLogin);

		$sql = mysqli_query($konek, "SELECT * FROM dosen 
						WHERE nip='$user' AND password='$pass'");
		$jmlh = mysqli_num_rows($sql);
		$w=mysqli_fetch_array($sql);

		$sq = mysqli_query($konek, "SELECT * FROM mahasiswa 
						WHERE npm='$user' AND password='$pass'");
		$jm = mysqli_num_rows($sq);
		$q=mysqli_fetch_array($sq);

		if($jml > 0){
			if($q['level']=="mahasiswa"){
				session_start();
				$_SESSION['login']	= true;
				$_SESSION['username']=$user;
				$_SESSION['ids']=$q['idmaha'];
				$_SESSION['level']		= "mahasiswa";
				header('location:./mahasiswa/index.php');
			}else if($d['level']=="admin"){
				session_start();
				$_SESSION['login']	= true;
				$_SESSION['username']=$user;
				
				$_SESSION['level']		= "admin";
			
			
				header('location:./admin/index.php');
			}else if($w['level']=="doswal"){
				session_start();
				$_SESSION['login']	= true;
				$_SESSION['id']=$w['iddosen'];
				$_SESSION['username']=$user;
				
				$_SESSION['level']		= "doswal";
			
				header('location:./dosen/index.php');
			}else{
				echo "Username dan Password anda Salah!!!";
			}
		}
	}
}
?>
</body>
</html>