<?php 
	//ini memanggil file function untuk koneksi
include 'function.php';

$id=$_GET["id"];

$data= query("SELECT * FROM tb_kuliner WHERE id = $id")[0];



//membuat kondisi ketika tombol button simpan di tekan
if (isset($_POST["edit"])) {

	if (edit($_POST) > 0) {
		echo "

		<script>
			alert('data berhasil di edit');
			document.location.href = 'adm_kuliner.php';
		</script>

		";
	}
	else {
		echo "
		<script>
			alert('data gagal di edit');
			document.location.href = 'adm_kuliner.php';
		</script>

		";
	}
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Edit</title>
	<link rel="stylesheet" href="StyleCSSadmin.CSS">
</head>
<body>
	<div class="edit">
		<div class="container">
			<form action="" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $data["id"] ?>">
				<h3>Silahkan Rubah Data Kuliner</h3>	

				<h4>Nama Kuliner</h4>
				<input type="text" name="nama" required="" value="<?php echo $data["nama"] ?>">	

				<h4>Gambar</h4>
				<input type="file" name="gambar">

				<h4>Artikel</h4>
				<textarea  rows="20" type="text" name="artikel" required="" value="<?php echo $data["artikel"] ?>"></textarea>	

				<h4>Lokasi</h4>
				<textarea  rows="10"type="text" name="letak" required="" value="<?php echo $data["letak"] ?>"></textarea>

				
				<br>
				<button type="submit" name="edit" value="edit"><h1>Edit</h1></button>
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