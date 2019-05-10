<?php 
	$konek = mysqli_connect("localhost","root","","simak");
	$query = mysqli_query($konek, "SELECT mahasiswa.NIM, mahasiswa.nama, mahasiswa.gender, CONCAT(mahasiswa.tmp_lahir,', ',mahasiswa.tgl_lahir) AS ttl, mahasiswa.alamat, mahasiswa.email, mahasiswa.fakultas FROM mahasiswa ORDER BY mahasiswa.NIM ASC")
?>


<!DOCTYPE html>
<html>
<head>
	<title>SIMAK | Sistem Informasi Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="page">
		<div class="tab">
			<table class="table" >
				<tr>
					<th width="10%">NIM</th>
					<th width="20%">Nama</th>
					<th width="5%">jenis Kelamin</th>
					<th width="15%">TTL</th>
					<th width="30%">Alamat</th>
					<th width="10%">Email</th>
					<th width="10%">Fakultas</th>
				</tr>
				<?php if(mysqli_num_rows($query)) {?>
					<?php while($row = mysqli_fetch_array($query)) {?>
						<tr>
							<td align="center"><?php echo $row['NIM'] ?></td>
							<td><?php echo $row['nama'] ?></td>
							<td align="center"><?php echo $row['gender'] ?></td>
							<td><?php echo $row['ttl'] ?></td>
							<td><?php echo $row['alamat'] ?></td>
							<td><?php echo $row['email'] ?></td>
							<td><?php echo $row['fakultas'] ?></td>
						</tr>
					<?php  }?>
				<?php  }?>
			</table>
		</div>
		<div class="option">
				<a class="btn" href="form.php">INPUT DATA</a>
				<a class="btn" href="#">EDIT DATA</a>
		</div>
	</div>
	
</body>
</html>