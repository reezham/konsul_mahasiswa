<?php include "navbar.php"; ?>

<h3>Tambah Data Mahasiswa</h3>
<form method="POST" action="simpan1.php">
	<table>
		<tr>
			<td>NPM</td>
			<td><input type="text" name="npm" maxlength="30"></td>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td>
			<td><input type="text" name="nama" maxlength="40"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>
				<select name="jurusan">
					<option value="" selected>- Pilih Jurusan -</option>
					
                            <option value="Informatika">Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Manajemen">Manajemen</option>
                            <option value="Psikologi">Psikologi</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tahun Ajaran</td>
			<td><select name="semester" id="semester" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
				<option value="6">6</option>
<option value="8">7</option>
<option value="8">8</option>
                        </select></td>
		</tr>
		<tr>
			<td>Tahun Masuk</td>
			<td><input type="text" name="thn_msk" ></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" ></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td><select name="kelas" id="kelas" class="form-control">
                            <option value="reguler">Reguler</option>
                            <option value="karyawan">Karyawan</option>
                            
                        </select></td>
		</tr>
		
		<tr>
			<td>Dosen Wali</td>
			<td><select name="doswal" id="doswal" class="form-control">
                            <?php
                include "../koneksi.php";
                //query menampilkan nip pegawai ke dalam combobox
                $query    =mysqli_query($konek, "SELECT * FROM dosen where iddosen");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['iddosen'];?>"><?php echo $data['nama'];?></option>
                <?php
                }
                ?>
                            
                        </select></td>
		</tr>
		
		
		<tr> <td>Level</td>
                        <td><input type="text" name="level" value="mahasiswa" readonly /></td></tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan" /></td>
		</tr>
	</table>
</form>



<!-- simpan data -->


