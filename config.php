<?php

$host = "localhost";
$username = "root";
$pw = "";
$dbname = "db_stok_barang";

$cn = mysqli_connect($host, $username , $pw, $dbname);

if (!$cn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}


?>