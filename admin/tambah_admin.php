<?php 
// ini buat koneksi
session_start();

include 'function.php';

//jika tombol registrasi di tekan

if (isset($_POST["register"])) {

	if (registrasi ($_POST) > 0) {
		echo "
			<script>
			alert('Admin berhasil di tambahkan');
			document.location.href = 'adm_user.php';
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
		<link rel="stylesheet" href="StyleCSSadmin.CSS">
</head>
<body class="login">
	<div class="login-box">
   		<img src="img/avatar.png" class="avatar">
        <h1>Tambahkan Admin</h1>
        <form action="" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Buat Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="buat Password">
            <p>Konfirmasi Password</p>
            <input type="password2" name="password2" placeholder="Ulangi Password">
            <input type="submit" name="register" value="Tambahkan">      
        </form>     
    </div>
</body>
</html>