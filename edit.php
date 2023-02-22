<?php

    include 'config.php';

    if(isset($_POST['update'])){

        $id = $_GET['id'];

        $nama = $_POST['nama'];
        $jumlah = $_POST['jumlah'];
        $id_kategori = $_POST['id_kategori'];

        $sql = "UPDATE tb_barang SET `nama`='$nama',`jumlah`='$jumlah',`id_kategori`='$id_kategori' WHERE id=$id ";

        $edit = mysqli_query($cn, $sql);



    }
    

?>


<?php

    include 'config.php';

    $id = $_GET['id'];

    $qr = "SELECT * FROM tb_barang WHERE id=$id";

    $result = mysqli_query( $cn , $qr);
 

    while( $data = mysqli_fetch_array($result)){

        $nama = $data['nama'];
        $jumlah = $data['jumlah'];
        $id_kategori = $data['id_kategori'];

    }



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



    <form action="" method="POST">

        <input type="text" name="nama"  placeholder="Masukkan Nama Anda"  value=" <?php echo $nama ?> ">
        <input type="text" name="jumlah" placeholder="Masukkan Jumlah Anda" value=" <?php echo $jumlah ?> ">
        <input type="text" name="id_kategori" placeholder="Masukkan id Kategori Anda" value=" <?php echo $id_kategori ?> ">

        <button name="update">Update</button>
        <button><a href="index.php">Kembali</a></button>

    </form>


</body>
</html>