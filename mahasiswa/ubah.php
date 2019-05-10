<?php 

require 'functions.php';

//ambil data di url
$id = $_GET["id_mahasiswa"];
//query data mahasiswa berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE id_mahasiswa = $id")[0];
var_dump($mhs);

//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	 
	// cek apakah data berhasil diubah atau tidak
	//var_dump(mysqli_affected_rows($conn)); // cek secara programer
	// if( mysqli_affected_rows($conn) >0 ) {
	// 	echo "berhasil";
	// } else {
	// 	echo "gagal!";
	// 	echo "<br>";
	// 	echo mysqli_error($conn); //pesan kesalahan
	// }
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
	<title>Ubah data mahasiswa</title>
	<link rel="stylesheet" href="style.css" type="text/css" class="stylesheet">
</head>
<body>
	<div class="page">
		<div class="header">

		</div>
		<div class="tabel">
			<h1>Ubah data mahasiswa</h1>
			<form class="form" action="" method="post" enctype="multipart/form-data"> 
			<input type="hidden" name ="id_mahasiswa" value="<?= $mhs["id_mahasiswa"]; ?>" >
			<input type="hidden" name ="gambarLama" value="<?= $mhs["gambar"]; ?>" >
			<body>

				<table>
						<thead>
						<tr>
							<td><h2>Nama</h2></td>
							<td><input type="text" name="nama"	id="nama" required value ="<?= $mhs["nama"] ?>"></td>
						</tr>
						<tr>
							<td><h2>NIM</h2></td>
							<td><input type="text" name="nim" id="nim" required value ="<?= $mhs["nim"] ?>"></td>
						</tr>
						<tr>
							<td><h2>Email</h2></td>
							<td><input type="text" name="email" id="email" value ="<?= $mhs["email"] ?>"></td>
						</tr>
						<tr>
							<td><h2>Jenis Kelamin</h2></td>
							<td>
								<select name="jk" id="jk" value ="<?= $mhs["jk"] ?>">
									<option value="">Pilih Jenis Kelamin</option>
									<option value="laki-laki">Laki-laki</option>
									<option value="perempuan">Perempuan</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><h2>Tempat Lahir</h2></td>
							<td><input type="text" name="tempat" id="tempat" required value ="<?= $mhs["tempat"] ?>"></td>
						</tr>
						<tr>
							<td><h2>Tanggal Lahir</h2></td>
							<td><input type="date" name="tgl_lahir" id="tgl_lahir" value ="<?= $mhs["tgl_lahir"] ?>"></td>
						</tr>
						<tr>
							<td><h2>Alamat</h2></td>
							<td><input type="text" name="alamat" id="alamat" required value ="<?= $mhs["alamat"] ?>"></td>
						</tr>
						<tr>
							<td><h2>Fakultas</h2></td>
							<td>
								<select name="fakultas" id="fakultas" value ="<?= $mhs["fakultas"] ?>">
									<option value="">Pilih Fakultas</option>
									<option value="Fakultas Ilmu Budaya">Fakultas Ilmu Budaya</option>
									<option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
									<option value="Fakultas Hukum">Fakultas Hukum</option>
									<option value="Fakultas Teknik">Fakultas Teknik</option>
									<option value="Fakultas Pertanian">Fakultas Pertanian</option>
									<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
									<option value="Fakultas Peternakan">Fakultas Peternakan</option>
									<option value="Fakultas MIPA">Fakultas MIPA</option>
									<option value="Fakultas Kedokteran Hewan">Fakultas Kedokteran Hewan</option>
									<option value="Fakultas Teknologi Pertanian">Fakultas Teknologi Pertanian</option>
									<option value="Fakultas Ilmu Sosial dan Ilmu Politik">Fakultas Ilmu Sosial dan Ilmu Politik</option>
									<option value="Fakultas Kelautan dan Perikanan">Fakultas Kelautan dan Perikanan</option>
									<option value="Fakultas Pariwisata">Fakultas Pariwisata</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><input type="submit" class="btn" value= "Ubah Data" name="submit"></td>
						</tr>
						</thead>
					</table>

			</form>
			
		</div>
	</div>
</body>
</html>