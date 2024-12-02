<?php
$latihancrud = mysqli_connect ("localhost", "root","", "dasarweb");

//check connection
if (mysqli_connect_error()){
    echo "koneksi database gagal : ". mysqli_connect_error();
}

?>