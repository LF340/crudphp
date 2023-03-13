<?php


    // session_start();


    // if(!isset($_SESSION['nama'])){
    //     header("Location: login.php");
    // }
   

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

<?php
      //Include File
      include 'config.php';

     //Read Data
     $result = mysqli_query($cn, "SELECT * FROM tb_barang INNER JOIN tb_kategori ON tb_barang.id_kategori = tb_kategori.id_kategori" );



?>

        <nav>
        <a href="brg_msk.php">barang masuk</a>
        <a href="kategori.php">Kategori</a>
        <a href="index.php">Stok barang</a>

        </nav>

        <br>


    <a href="add.php">
        <button>
            New Data
        </button>
    </a>

    <a href="logout.php">
        <button>
           Log out
        </button>
    </a>

    <br><br>

<table width="50%" border=1  style="border-collapse:collapse;" >

        <thead>
            <th>Nama</th>
            <th>Gambar</th>
            <th>Jumlah</th>
            <th>Kategori</th>
            <th>Action</th>

        </thead>

        <?php
        
            while( $data = mysqli_fetch_array($result) ){
         ?>       
                <tr>
                <td> <?php echo $data['nama'] ?> </td>
                <td><img src="upload/<?php echo $data['gambar']?>" width="150" height="150"></td>
                <td> <?php echo $data['jumlah'] ?> </td>
                <td> <?php echo $data['nama_kategori']?> </td>
                <?php
                echo" <td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='delete.php?id=$data[id]'>Delete</a></td></tr> "   
                ?>

         <?php       
            }
        
        ?>


</table>




    
</body>
</html>