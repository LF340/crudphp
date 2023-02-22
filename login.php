<?php

include 'config.php';
// error_reporting(0);

if(isset($_SESSION['nama'])){
    header("Location: index.php");
}

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = " SELECT * FROM tb_user WHERE email = '$email' AND password='$password' ";
    $result = mysqli_query($cn, $sql);
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        header("Location: index.php");
    }else{

        echo "<script>alert(' Email Atau Password Anda Salah ')</script>";

    }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login Crud</title>
</head>
<body>



<div class="container">

    <form action="" method="POST" class="login-email">
    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email"  required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
    </form>

</div>



    
</body>
</html>