<?php

//koneksi ke database
$konek = mysqli_connect("localhost","root","","simak");

//ambil fariable dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tmlh = $_POST['tmplahir'];
$tglh = $_POST['tgllahir'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$fakultas = $_POST['fakultas'];

if (!empty($fakultas))
{
	$input = "INSERT INTO mahasiswa(NIM,nama,gender,tmp_lahir,tgl_lahir,alamat,email,fakultas) VALUES('$nim','$nama','$jk','$tmlh','$tglh','$alamat','$email','$fakultas')";
	$hasil = mysqli_query($konek, $input);
}
else{
	echo "Maaf Anda Harus Memilih fakultas";
	echo '<META HTTP-EQUIV="Refresh" Content="5;url=form.php">';
}

//apabila berhasil
if ($hasil)
{
	echo "INPUT DATA SUCCES";
	echo '<META HTTP-EQUIV="Refresh" Content="2;url=transition.php">';
}
else{
	echo "INPUT DATA GAGAL";
	echo '<META HTTP-EQUIV="Refresh" Content="2;url=form.php">';
}

?>