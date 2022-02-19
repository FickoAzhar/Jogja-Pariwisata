<?php 
// ini buat koneksi
include 'function.php';

//jika tombol registrasi di tekan

if (isset($_POST["register"])) {

	if (registrasi ($_POST) > 0) {
		echo "
			<script>
			alert('Admin berhasil di tambahkan');
			</script>
		";
	} else {

		echo mysqli_error($koneksi);
	}
}

 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<H1>Halaman Registrasi Admin</H1>
	<form action="" method="post">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" placeholder="Username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" placeholder="Pssword"></td>
		</tr>
		<tr>
			<td>konfirmasi password</td>
			<td><input type="text" name="password2"	placeholder="Ulangi Password"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="register" value="register">
			</td>
		</tr>

	</table>
	</form>

	</body>
</html>