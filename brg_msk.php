<?php

    include 'config.php';

    $result = mysqli_query($cn, "SELECT * FROM tb_brg_masuk ");

    
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

    <a href="addb.php">

        <button>Add New Data</button>

    </a>

    <br><br>


    <table width="40%" border=1  style="border-collapse: collapse;" >

    <thead>
        <th>id</th>
        <th>id_barang</th>
        <th>jumlah</th>
        <th>harga</th>
        <th>tgl</th>
        <th>Action</th>
    </thead>

    <tbody>

        <?php
                while( $data = mysqli_fetch_array($result) ){
                    echo"<tr>";
                    echo"<td>".$data['id'] ."</td>";
                    echo"<td>".$data['id_barang'] ."</td>";
                    echo"<td>".$data['jumlah'] ."</td>";
                    echo"<td>".$data['harga'] ."</td>";
                    echo"<td>".$data['tgl'] ."</td>";
                    echo"<td><a href='editbm.php?id=$data[id]'>Edit</a>  | <a href='deletebm.php?id=$data[id]'>Delete</a>  </td>";
                    echo"</tr>";

                }

        ?>
   
        


    </tbody>



    </table>

    
</body>
</html>