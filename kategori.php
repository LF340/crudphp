
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

include "config.php";

error_reporting(0);


//SELECT
$result = mysqli_query($cn, "SELECT * FROM tb_kategori ")

?>


<a href="addk.php">
     <button>
        
        New Data
        
    </button>
        </a>

    <br> <br>


    <table width=40% border=1 style=" border-collapse: collapse; " >

        <thead>
            <th>id</th>
            <th>Nama Kategori</th>
            <th>Action</th>
        </thead>


        <tbody>

            <?php
            
                while($data = mysqli_fetch_array($result) ){

                    echo"<tr>";
                    echo"<td>".$data['id_kategori']."</td>";
                    echo"<td>".$data['nama_kategori']."</td>";
                    echo"<td> <a href='editk.php?id=$data[id_kategori]'>Edit</a> | <a href='deletek.php?id=$data[id_kategori]'>Delete</a> </td>";


                }
            
            ?>

                
        </tbody>


    </table>

    
</body>
</html>