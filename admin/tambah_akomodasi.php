<?php 
	//ini memanggil file function untuk koneksi
include 'function.php';

//membuat kondisi ketika tombol button simpan di tekan
if (isset($_POST["tambah"])) {

	if (save_akomodasi ($_POST) > 0) {
		echo "

		<script>
			alert('data berhasil di tambahkan');
			document.location.href = 'adm_akomodasi.php';
		</script>

		";
	}
	else {
		echo "
		<script>
			alert('data gagal di tambahkan');
			document.location.href = 'adm_akomodasi.php';
		</script>

		";
	}
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Inputan</title>
	<link rel="stylesheet" href="StyleCSSadmin.CSS">
</head>
<body>
	<div class="edit">
		<div class="container">
			<form action="" method="POST" enctype="multipart/form-data">
				<h3>Silahkan Input Data </h3>
				<h4>Nama Penginapan</h4>
				<input type="text" name="nama" required="">
				<h4>Gambar</h4>
				<input type="file" name="gambar">
				<h4>Artikel</h4>
				<textarea rows="20"  name="artikel"></textarea>
				<h4>Lokasi</h4>
				<textarea rows="10" name="lokasi"></textarea>
				<button type="submit" name="tambah" value="tambah"><h1>Tambahkan</h1></button>
			</form>
		</div>
	</div>
	<footer>
		<center>
			<span class="credit">Created By Kelompok 4 | </span>
			<span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
		</center>
	</footer>
</body>
</html>