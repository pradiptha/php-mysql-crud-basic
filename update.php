<?php 
    session_start();
    if (!isset($_SESSION['login'])) {
        header('Location: index.php');
    }
    require "function.php";

    $id = $_GET["id"];
    $dataMhs = query("SELECT * FROM mahasiswa WHERE idMhs = $id")[0];

    if(isset($_POST["submit"])){
        if( ubah($_POST) > 0 ){
            echo "
                <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
            <script>
                    alert('data gagal diubah!');
                    document.location.href = 'index.php';
            </script>
    
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data Mahasiswa</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
</head>
<body>
<div class="container cf">
        <div class="table-wrapper">
            <div class="table-title cf">
                <div class="title-row">
                    <h2>Ubah Data <b>Mahasiswa<b></h2>
                </div>
                <!-- <div class="btn-row">
                    <a class="btn-add" ><i class="fas fa-plus-circle fa-lg"></i>Tambah Data Mahasiswa</button>
                </div> -->
            </div>
            <form action="" method="post" class="form">
            <input type="hidden" name="idMhs" value="<?= $dataMhs["idMhs"];?>">
                <div class="field">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim" required value="<?=$dataMhs["nim"];?>">
                </div>
                <div class="field">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" required value="<?=$dataMhs["nama"];?> ">
                </div>
                <div class="field">
                    <label for="nim">E-mail</label>
                    <input type="text" name="email" id="email" required value="<?=$dataMhs["email"];?> ">
                </div>
                <div class="field">
                    <label for="jk">Jenis Kelamin</label>
                    <select name="jk" id="jk">
                        <option value="laki-laki" <?=($dataMhs["jenisKelamin"]=="Laki-laki" ? 'selected' : '');?>>Laki-laki</option>
                        <option value="perempuan" <?=($dataMhs["jenisKelamin"]=="Perempuan" ? 'selected' : '');?>>Perempuan</option>
                    </select>
                </div>
                <div class="field">
                    <label for="tempat-lahir">Tempat Lahir</label>
                    <input type="text" name="tempat-lahir" id="tempat-lahir" required value="<?=$dataMhs["tempatLahir"];?> ">
                </div>
                <div class="field">
                    <label for="tgl-lahir">Tanggal Lahir</label>
                    <input type="date" name="tgl-lahir" id="tgl-lahir" required value="<?=$dataMhs["tglLahir"];?>">
                </div>
                <div class="field">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" required value="<?=$dataMhs["alamat"];?> ">
                </div>
                <div class="field">
                    <label for="fakultas">Fakultas</label>
                    <select name="fakultas" id="fakultas" placeholder="fakultas">
                        <?php
                        global $conn;
                        
                        $result = mysqli_query($conn, "SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS
                            WHERE TABLE_NAME = 'mahasiswa' AND COLUMN_NAME = 'fakultas'");
                        
                        $row = mysqli_fetch_array($result);
                        $enumList = explode(",", str_replace("'", "", substr($row['COLUMN_TYPE'], 5, (strlen($row['COLUMN_TYPE'])-6))));
                        // var_dump($row);
                        foreach($enumList as $value) : 
                        ?>
                        <option value="<?=$value?>" <?=($dataMhs["fakultas"]==$value ? 'selected' : '');?>><?=$value?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>