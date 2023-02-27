<?php

    include 'config.php';


    if( isset($_POST['update']) ){

        $id = $_GET['id'];
        $nama = $_POST['nama'];

        $result = mysqli_query($cn, "UPDATE `tb_kategori` SET `nama_kategori`='$nama' WHERE id_kategori=$id ");

        echo "User added successfully. <a href='kategori.php'>View Users</a>";
    }




?>


<?php

    include 'config.php';

    $id = $_GET['id'];

    $result = mysqli_query($cn, "SELECT * FROM tb_kategori WHERE id_kategori=$id");


    while( $data = mysqli_fetch_array($result) ){

     
        $nama = $data['nama_kategori'];


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

        <input type="text" name="nama" value=" <?php echo "$nama"; ?> " >

       <button name="update">Update</button>

       <a href="kategori.php">
            
            Kembali

       </a>
    </form>



    
</body>
</html>