<!DOCTYPE html>
<html>
<head>
	<title>SIMAK | Sistem Informasi Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="page">
		<div class="header">

		</div>
		<div class="form-page">
			<h1>FORMULIR DATA MAHASISWA</h1>
			<form class="form" method="POST" action="input.php" >
				<table>
					<tr>
						<td><h2>NIM</h2></td>
						<td><input type="text" name="nim" placeholder="Masukkan NIM Anda" required></td>
					</tr>
					<tr>
						<td><h2>Nama Lengkap</h2></td>
						<td><input type="text" name="nama" placeholder="Masukkan Nama Anda" required></td>
					</tr>
					<tr>
						<td><h2>Jenis Kelamin</h2></td>
						<td>
							<select name="jk">
								<option value="laki-laki">--Pilih</option>
								<option value="laki-laki">Laki-laki</option>
								<option value="perempuan">Perempuan</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><h2>Tempat Lahir</h2></td>
						<td><input type="text" name="tmplahir" placeholder="Kota Tempat lahir Anda" required></td>
					</tr>
					<tr>
						<td><h2>Tanggal lahir</h2></td>
						<td><input type="date" name="tgllahir"></td>
					</tr>
					<tr>
						<td><h2>Alamat</h2></td>
						<td><input type="text" name="alamat" placeholder="Tempat tinggal Anda sekarang" required></td>
					</tr>
					<tr>
						<td><h2>E-mail</h2></td>
						<td><input type="text" name="email" placeholder="Email aktif Anda" required></td>
					</tr>
					<tr>
						<td><h2>Fakultas</h2></td>
						<td>
							<select name="fakultas" placeholder="Fakultas--">
								<option value="">--Fakultas</option>
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
						<td></td>
						<td><input class="btn" type="submit" name="kirim"></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="footer">
			
		</div>
	</div>
</body>
</html>