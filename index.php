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
            <th>Jumlah</th>
            <th>Kategori</th>
            <th>Action</th>

        </thead>

        <?php
        
            while( $data = mysqli_fetch_array($result) ){
                
                echo"<tr>";
                echo"<td>".$data['nama']."</td>";
                echo"<td>".$data['jumlah']."</td>";
                echo"<td>".$data['nama_kategori']."</td>";
                echo"<td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='delete.php?id=$data[id]'>Delete</a></td></tr>";
            }
        
        ?>


</table>




    
</body>
</html>