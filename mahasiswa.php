<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0">
        <title>Mahasiswa</title>
        </head>
        <body>
            <a href="Tambah.php">Tambah</a>
            <br>
            <table cellspacing="0" border="1" align="center">
            <tr>
                <td>No.</td>
                <td>NIM</td>
                <td>Nama</td>
                <td>Tanggal Lahir</td>
                <td>Alamat</td>
                <td>Prodi</td>
                <td>Aksi</td>
             </tr>
         <?php
        include 'koneksi.php';
         $no = 1;
         $data = mysqli_query($latihancrud,"SELECT * FROM mahasiswa");
         while($d = mysqli_fetch_array($data)){
            ?>
  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['tgllahir']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['prodi']; ?></td>
                    <td>
                    <a href="ubah.php?nim=<?= $d['nim']; ?>">Ubah</a>


                    <a href="hapus.php?nim=<?= $d['nim']; ?>"
                        onclick="return confirm('Yakin mau hapus, Sayang?')">Hapus</a>
                    
                    </td>
                </tr>
            <?php } ?>
    </table>
         </body>
</html>
