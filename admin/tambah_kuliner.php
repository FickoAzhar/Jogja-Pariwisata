<?php 
	//ini memanggil file function untuk koneksi
include 'function.php';

//membuat kondisi ketika tombol button simpan di tekan
if (isset($_POST["tambah"])) {

	if (save ($_POST) > 0) {
		echo "

		<script>
			alert('data berhasil di tambahkan');
			document.location.href = 'adm_kuliner.php';
		</script>

		";
	}
	else {
		echo "
		<script>
			alert('data gagal di tambahkan');
			document.location.href = 'adm_kuliner.php';
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
				<h4>Nama Kuliner</h4>
				<input type="text" name="nama" required="">
				<h4>Gambar</h4>
				<input type="file" name="gambar">
				<h4>Artikel</h4>
				<textarea rows="20"  name="artikel"></textarea>
				<h4>Lokasi</h4>
				<textarea rows="10" name="letak"></textarea>
				<button type="submit" name="tambah" value="tambah"><h1>Tambahkan</h1></button>
			</form>
		</div>
	</div>
</body>
</html>