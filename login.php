<?php 
    session_start();

    if(isset($_SESSION['login'])){
        header('Location: ../login.php');
        exit;
      }
      

    require 'functions.php';

    // echo  password_hash("123456", PASSWORD_DEFAULT);
    // var_dump($_POST);
    // die();


    if(isset($_POST['login'])){

            $username = $_POST['username'];
            $password = $_POST['password'];

        $result = mysqli_query($conn, "select * from users where username = '$username'");

        if(mysqli_num_rows($result)===1){
            // cek password

            $row = mysqli_fetch_assoc($result);

            if( password_verify($password, $row['password'])){

                // set session
                $_SESSION["login"] = true;

                header("Location: user/home.php");

                exit;
            }
        }

        $error = true;
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Bootstrap JS, Popper & JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./assets/img/user.png" type="image/x-icon">
    <title>Login</title>
</head>
<body class="bg-light mx-auto">
    <div class="container my-4">
        <h1 class="text-center">Masuk ke Akun Anda</h1>
        <div class="row my-5">
            <div class="col">
                <img src="./assets/img/user.png" class="rounded-circle float-left d-block rounded" alt="..." width="270px" height="270px"> 
            </div>
            <div class="col my-5">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="username">Nama Pengguna</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="Password">Kata Sandi</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <?php if(isset($error)) : ?>
                        <div class="alert alert-danger" role="alert">Username/Password salah</div>
                    <?php endif; ?>


                    <p class="text-left"> Belum punya akun? Silahkan buat akun Anda<a href="./sign-in.php"> disini</a></p>
                    <button type="submit" class="btn btn-lg btn-primary" name="login" value="masuk">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</html>