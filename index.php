<?php
    session_start();
    require 'function.php';
    if(isset($_GET["q"])){
        // var_dump($_POST);
        $key = $_GET["q"];
        $mahasiswa = query("SELECT * FROM mahasiswa WHERE nama LIKE '%$key%' OR nim LIKE '%$key%' OR email LIKE '%$key%' OR fakultas LIKE '%$key%' ORDER BY nim");
    } else {
        $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY nim");
    }
    // var_dump($mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMAK</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title cf">
                <div class="title-row">
                    <h2>Daftar <b>Mahasiswa<b></h2>
                </div>
                <?php
                    if ( isset($_SESSION["login"])) {
                        echo '
                        <div class="btn-row">
                            <a class="btn-add" href="logout.php" style="background-color: #F44336!important;" >Logout</a> 
                            <a class="btn-add" href="add.php"><i class="fas fa-plus-circle fa-lg"></i>Tambah Data Mahasiswa</a>
                        </div>
                        ';
                    } else {
                        echo '
                        <div class="btn-row">
                            <a class="btn-add" href="login.php">Login</a>
                        </div>
                        ';
                    }
                ?>
            </div>
            <div class="search-wrapper">
                <div class="field">
                    <form action="" method="get">
                        <label for="cari" style="display:block;">Cari</label>
                        <input type="text" name="q" placeholder="<?php if(isset($_GET["q"])) {echo $_GET["q"];} ?>">
                        <input class="btn-search" type="submit" value="Search" name="search"> 
                        <input class="btn-reset" type="submit" value="Clear" name="reset">
                    </form>
                </div>
            </div>
            <div class="table-data">
                <table class="table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tgl Lahir</th>
                            <th>Email</th>
                            <th>Fakultas</th>
                            <?php
                            if ( isset($_SESSION["login"])) {
                                echo '
                            <th>Actions</th>
                            ';
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                            foreach ($mahasiswa as $row) :
                        ?>
                        <tr>
                            <td><?=$i?></td>
                            <td><?=$row["nim"]?></td>
                            <td><a href="detail.php?id=<?=$row["idMhs"]?>"><?=$row["nama"]?></a></td>
                            <td><?=$row["jenisKelamin"]?></td>
                            <td><?=$row["tglLahir"]?></td>
                            <td><?=$row["email"]?></td>
                            <td><?=$row["fakultas"]?></td>
                            <?php if ( isset($_SESSION["login"])) :?>
                            <td>
                                <a href="update.php?id=<?=$row["idMhs"]?>" class="edit"><i class="far fa-edit fa-lg"></i></a>
                                <a href="delete.php?id=<?=$row["idMhs"]?>" onclick="return confirm("Hapus Data?");" class="delete"><i class="fas fa-trash-alt fa-lg"></i></a>
                            </td>
                            <?php endif ?>
                        </tr>
                        <?php $i++;
                            endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>