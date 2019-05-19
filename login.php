<?php
    session_start();
    require "function.php";
    if(isset($_POST["login"])){
        if($_POST['username'] == "admin" && $_POST['password'] == "admin"){
            $_SESSION["login"] = true;
            header('Location: index.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
</head>
<body>
<div class="container cf">
        <div class="table-wrapper">
            <div class="table-title cf">
                <div class="title-row">
                    <h2><b>Login<b></h2>
                </div>
                <!-- <div class="btn-row">
                    <a class="btn-add" ><i class="fas fa-plus-circle fa-lg"></i>Tambah Data Mahasiswa</button>
                </div> -->
            </div>
            <form action="" method="post" class="form">
                <div class="field">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="username" required>
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="password" required>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="login" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>