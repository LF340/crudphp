<?php

    include 'config.php';

    if(isset($_POST['update'])){

        $id = $_GET['id'];

        $nama = $_POST['nama'];
        $jumlah = $_POST['jumlah'];
        $id_kategori = $_POST['id_kategori'];
        $gambar = $_FILES['gambar']['name'];
        $gambar_tmp = $_FILES['gambar']['tmp_name'];

        $lokasi = "upload/". $gambar;
        move_uploaded_file($gambar_tmp,$lokasi);
        

        $sql = "UPDATE tb_barang SET `nama`='$nama',`gambar`='$gambar',`jumlah`='$jumlah',`id_kategori`='$id_kategori' WHERE id=$id ";

        $edit = mysqli_query($cn, $sql);

        echo "User Update successfully. <a href='index.php'>View Users</a>";

    }
    

?>


<?php

    include 'config.php';

    $id = $_GET['id'];

    $qr = "SELECT * FROM tb_barang WHERE id=$id";

    $result = mysqli_query( $cn , $qr);
 

    while( $data = mysqli_fetch_array($result)){

        $nama = $data['nama'];
        $gambar = $data['gambar'];
        $jumlah = $data['jumlah'];
        $id_kategori = $data['id_kategori'];

    }



?>

<?php
    include 'config.php';

    $rels = mysqli_query($cn, "SELECT * FROM tb_barang INNER JOIN tb_kategori ON tb_barang.id_kategori = tb_kategori.id_kategori ");

    while( $data = mysqli_fetch_array($rels) ){

        $kateg = $data['nama_kategori'];

    }

?>

<?php
    include 'config.php';

    $relasi = mysqli_query($cn, "SELECT * FROM tb_kategori");


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



    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">nama barang</label>
        <input type="text" name="nama"  placeholder="Masukkan Nama Anda"  value=" <?php echo $nama ?> ">
        <br><br>
        <img src="upload/<?php echo $gambar ?> " width="150" height="150" alt="">
        <br><br>
        <input type="file" name="gambar" value=" <?php echo $gambar ?> ">
        <br><br>
        <label for="">jumlah</label>
        <input type="number" name="jumlah" placeholder="Masukkan Jumlah Anda" value=" <?php echo $jumlah ?> ">
        <br><br>
        <label for="">Kategori</label>
        <select name="id_kategori">

            <option value="id_kategori"><?php echo $kateg ?></option>

            <?php
                while( $data = mysqli_fetch_array($relasi)){
                    echo"<option value='$data[id_kategori]'>". $data['nama_kategori'] ."</option>";
                    
                }
            ?>

        </select>

        <button name="update">Update</button>
        <button><a href="index.php">Kembali</a></button>

    </form>


</body>
</html>