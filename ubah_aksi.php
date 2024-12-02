<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang di kirim dari form method POST
$nim = $_POST ['nim'];
$nama = $_POST ['nama'];
$tgllahir = $_POST ['tgllahir'];
$alamat = $_POST ['alamat'];
$prodi = $_POST ['prodi'];

//mengubah data di database
mysqli_query($latihancrud,
"UPDATE mahasiswa SET
nama='$nama',
tgllahir='$tgllahir',
alamat='$alamat',
prodi='$prodi',
WHERE nim='$nim'");

//mengalihkan halaman kembali ke Mahasiswa.php
header("location:mahasiswa.php");
?>