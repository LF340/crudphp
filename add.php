<?php
     include 'config.php';

    //  $relasi = mysqli_query($cn, "SELECT * FROM tb_barang INNER JOIN tb_kategori ON tb_barang.id_kategori = tb_kategori.id_kategori");

        $relasi = mysqli_query($cn, "SELECT * FROM tb_kategori");


?>

<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Jumlah</td>
                <td><input type="number" name="jumlah"></td>
            </tr>
            <tr> 
                 <td>Kategori</td>
                <td>
                <select name="id_kategori" id="">

                    <option value="" disabled selected>Silahkan Pilih Kategori Anda</option>

                    <?php
                            while( $data = mysqli_fetch_array($relasi) ){
                                echo"<option value='$data[id_kategori]'>". $data['nama_kategori'] . "</option>";
        }
                    ?>


                </select>
                </td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $jumlah = $_POST['jumlah'];
        $id_kategori = $_POST['id_kategori'];
        
        // include database connection file
        include 'config.php';
                
        // Insert user data into table
        $result = mysqli_query($cn, "INSERT INTO tb_barang(nama,jumlah,id_kategori) VALUES('$nama','$jumlah','$id_kategori')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>