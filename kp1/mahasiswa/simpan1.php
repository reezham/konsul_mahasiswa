<?php
include '../koneksi.php';
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//variabel untuk menampung inputan dari form
		$npm 	= $_POST['kode_matkul'];
		$nama 	= $_POST['nama'];
		
		$semester 	= $_POST['semester'];
		$thn_msk 	= $_POST['sks'];
		
		

		// Membuat Array untuk menampung bulan bahasa indonesia
		


		//proses simpan
		if($npm=='' || $nama=='' || $semester==''){
			echo "Form belum lengkap...";
		}else{
			$simpan = mysqli_query($konek, "insert into matkul_maha(kode_matkul,nama,semester,sks)
					values('$npm','$nama','$semester','$thn_msk')");
			
			if($simpan){
				header('location:krs.php');
			}
				
			}
		}

	
?>