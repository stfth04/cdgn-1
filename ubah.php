<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah</title>
</head>
<body>
     <a href="mahasiswa.php">kembali</a>
     <br>
     <form action="ubah_aksi.php" method="POST">
        <table>
        <?php
        include 'koneksi.php';
         $nim = $_GET['nim'];
         $data = mysqli_query($latihancrud,
         "SELECT * FROM mahasiswa WHERE nim='$nim'");

         while($d = mysqli_fetch_array($data)){
            $nama = $d['nama'];
            $tgllahir = $d['tgllahir'];
            $alamat = $d['alamat'];
            $prodi = $d['prodi'];
         }
        ?>

            <tr>
                <td>NIM</td>
                <td>
                    <input type="text" name="nim" value="<?= $nim; ?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" value="<?= $nama; ?>">
                </td>
            </tr>
            <tr>
            <td>tgllahir</td>
                <td>
                <input type="Date" name="tgllahir" value="<?= $tgllahir; ?>">
                </td>
            </tr>
            <tr>
            <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" value="<?= $alamat; ?>">
                </td>
            </tr>
            <tr>
            <td>Prodi</td>
                <td>
                     <input type="Number" name="prodi" value="<?= $prodi; ?>">
                </td>
            </tr>
            <tr>

            <td></td>
                <td>
                <input type="reset" value="Batal">
                <input type="submit" value="Simpan">
                </td>
            </tr>
    </form>
</body>
</html>