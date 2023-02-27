<?php

    include 'config.php';

    $id = $_GET['id'];

    $delete = mysqli_query($cn, "DELETE FROM tb_kategori WHERE id_kategori=$id" );

    header("Location: kategori.php");


?>