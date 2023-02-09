<html>
    <head>
<?php include 'navbar.php' ?>
<style>
#si{
float: left;
    width: 600px;
    margin: 0 auto;
    padding: 10px;
}

#art {
float: right; width: 680px;
}
</style>        
    </head>
    <body>
<div id=art>
        <h3>Data Mata Kuliah</h3>
        
            <p>Nama <b><?php echo $_SESSION['level']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['username']; ?></b>.</p>
       
        
        
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
        if (isset($_SESSION['nama'])) {
            $id_peg=$_SESSION['nama'];

            //menampilkan data pegawai berdasarkan pilihan combobox ke dalam form
            $tamPeg=mysqli_query($konek, "SELECT * FROM mahasiswa ");
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