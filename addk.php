

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST" >

    <input type="text" name="nama" placeholder="Masukkan Nama Kategori">

        <input type="submit" name="Submit" value="Submit">

  
    <a href="kategori.php">
      <button> Kembali </button>
    </a>  

    </form>
    
    

</body>
</html>

<?php

include "config.php";

if(isset($_POST['Submit'])){
    $nama = $_POST['nama'];

    $result = mysqli_query($cn, "INSERT INTO tb_kategori (nama_kategori) VALUES ( '$nama' ) " );

    echo"Create Successfully <a href='kategori.php'>View Data</a> ";


}



?>