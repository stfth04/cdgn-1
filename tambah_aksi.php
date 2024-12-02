<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang di kirim dari form method POST
$nim = $_POST ['nim'];
$nama = $_POST ['nama'];
$tgllahir = $_POST ['tgllahir'];
$alamat = $_POST ['alamat'];
$prodi = $_POST ['prodi'];

//menginput data ke database
mysqli_query ($latihancrud,
    "INSERT INTO mahasiswa 
    VALUES ('$nim', '$nama', '$tgllahir', '$alamat', '$prodi')");

    //mengalihkan halaman kembali ke Mahasiswa.php
    header("location:mahasiswa.php");

?>