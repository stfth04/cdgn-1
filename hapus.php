<?php
//koneksi database 
include 'koneksi.php';

//menangkap data yang di kirim dari form method POST
$nim = $_GET['NIM'];

//menginput data ke database 
mysqli_query($latihancrud,
    "DELETE FROM mahasiswa WHERE NIM='$nim'");
    
//mengalihkan halaman kembali ke Mahasiswa.php
     header("location:mahasiswa.php");

?>