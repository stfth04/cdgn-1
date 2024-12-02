<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
     <a href="mahasiswa.php">kembali</a>
     <br>
     <form action="tambah_aksi.php" method="POST">
        <table>
            <tr>
                <td>NIM</td>
                <td>
                    <input type="text" name="Nim">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="Nama">
                </td>
            </tr>
            <tr>
            <td>tgllahir</td>
                <td>
                <input type="Date" name="tgllahir">
                </td>
            </tr>
            <tr>
            <td>Alamat</td>
                <td>
                    <input type="text" name="Alamat">
                </td>
            </tr>
            <tr>
            <td>Prodi</td>
                <td>
                     <input type="Number" name="Prodi">
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