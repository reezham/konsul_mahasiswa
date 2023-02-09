<html>
    <head>
<?php include 'header.php' ?>
        
    </head>
    <body>
<div id=art>
        <h3>Data Mata Kuliah</h3>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
            <p>Select Semester:</p>
            <select name="semester" style="width:160px;">
                <?php
                include "koneksi.php";
                //query menampilkan nama unit kerja ke dalam combobox
                $query    =mysqli_query($konek, "SELECT * FROM matkul GROUP BY semester ORDER BY semester");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['semester'];?>"><?php echo $data['semester'];?></option>
                <?php
                }
                ?>
            </select>
            <input type="submit" value="Pilih">
            <a href="krs.php">Refresh</a>
        </form>
        
        <table border="1" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Matkul</th>
                    <th>Nama Matkul</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    
                </tr>
            </thead>
            <?php
            if (isset($_GET['semester'])) {
                $unit_kerja=trim($_GET['semester']);
                
                //menampilkan pegawai berdasarkan unit kerja yang dipilih pada combobox
                $tamPeg=mysqli_query($konek, "SELECT * FROM matkul WHERE semester='$unit_kerja' ORDER BY semester DESC");
            
                $no=0;
                while ($tpeg = mysqli_fetch_array($tamPeg)) {
                $no++;
                ?>
            <tbody>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $tpeg['kode_matkul'];?></td>
                    <td><?php echo $tpeg['nama'];?></td>
                    <td><?php echo $tpeg['semester'];?></td>
                    <td><?php echo $tpeg['sks'];?></td>
                    
                </tr>
            </tbody>
            <?php
                }
            }
            ?>
        </table>
</div>

<div id=si>
<h3>Menampilkan Data pada Form Berdasarkan Pilihan Combo Box</h3>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
            <p>Pilih Mata Kuliah:</p>
            <select name="nama" style="width:200px;">
               <?php
                include "koneksi.php";
                //query menampilkan nip pegawai ke dalam combobox
                $query    =mysqli_query($konek, "SELECT * FROM matkul ORDER BY nama");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['nama'];?>"><?php echo $data['nama'];?></option>
                <?php
                }
                ?>
            </select>
            <input type="submit" value="Pilih">
            <a href="krs.php">Refresh</a>
        </form>
        <h4>Data Pegawai</h4>
        <?php
        if (isset($_GET['nama'])) {
            $id_peg=$_GET['nama'];

            //menampilkan data pegawai berdasarkan pilihan combobox ke dalam form
            $tamPeg=mysqli_query($konek, "SELECT * FROM matkul WHERE nama='$id_peg'");
            $tpeg = mysqli_fetch_array($tamPeg);
        
        ?>
        <form action="simpan1.php" method="POST">
        <table border="0" cellpadding="2">
            <tr>
                <td width="100">Kode Matkul</td>
                <td width="280">: <input type="text" name="kode_matkul" value="<?php echo $tpeg['kode_matkul']; ?>"/></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama" value="<?php echo $tpeg['nama']; ?>"/></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>: <input type="text" name="semester" value="<?php echo $tpeg['semester']; ?>"/></td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>: <input type="text" name="sks" value="<?php echo $tpeg['sks']; ?>" /></td>
            </tr>
            
            
            <tr>
                <td></td>
                <td>  <input type="submit" value="Save"></td>
            </tr>
        </table>
        </form>
        <?php
        }
        ?>



</div>
    </body>
</html>