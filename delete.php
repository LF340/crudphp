<?php

    include "config.php";

    $id = $_GET['id'];

    $delete = mysqli_query( $cn, "DELETE FROM tb_barang WHERE id=$id " );

    echo "<script> alert('Data Berhasil di hapus') </script>";
    
    header("Location: index.php");


?>