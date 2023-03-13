<?php

    include 'config.php';

    if(isset($_POST['update'])){

        $id = $_GET['id'];
        $idb = $_POST['id_barang'];
        $jumlah = $_POST['jumlah'];
        $harga = $_POST['harga'];
        $tgl = $_POST['tgl'];

        $query = mysqli_query($cn, "UPDATE tb_brg_masuk SET `id_barang`='$idb',`jumlah`='$jumlah',`harga`='$harga',`tgl`='$tgl' WHERE id=$id");


    }

?>

<?php

    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">

<input type="number" name="id_barang" placeholder="Masukkan id barang anda">
<input type="number" name="jumlah" placeholder="Masukkan jumlah barang anda">
<input type="number" name="harga" placeholder="Masukkan Harga barang anda">
<input type="date" name="tgl" placeholder="Masukkan Tanggal anda">

<input type="submit" name="update" value="add">

</form>
</body>
</html>