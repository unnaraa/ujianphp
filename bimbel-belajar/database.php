<?php

// include = nempel file yg udah ada kode nya
include 'koneksi.php';

$database = 'phpbimbel2';

$create = "CREATE DATABASE $database";

if($koneksi->query($create) === true) {
    echo "Database $database berhasil dibuat";
}else{
    echo "Gagal membuat Database";
}
$koneksi->close();

?>