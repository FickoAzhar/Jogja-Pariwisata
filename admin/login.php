<?php 
//Jalankan dulu session
session_start();

//jika sudah login maka masuk ke tampil.php
if (isset($_SESSION["login"])) {
		header("location: tampil_admin.php");
		exit;
	}	

//buat koneksi terlebihdahlu
include 'function.php';

//kondisi jika tombol login di tekan user

if (isset($_POST["login"])) {
		
	$username = $_POST["username"];
	$password = $_POST["password"];


	$result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");

// cek username
	if (mysqli_num_rows($result) === 1) {
		
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])){
//SET SESSION
	$_SESSION["login"]=true;

			header("location:tampil_admin.php");
		exit;
	}

	}	

	$error = true;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="StyleCSSadmin.CSS">
</head>
<body class="login">
	<?php if( isset($error)): ?>
		<p> username / Password Anda Salah, Silahkan Coba Lagi..!</p>
	<?php endif; ?>

	<div class="login-box">
   		<img src="img/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Ketikan Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Ketikan Password">
            <input type="submit" name="login" value="login">
            <a href="#"><h4>Lupa Password?</h4></a>    
        </form>
        
        
    </div>


	<!-- <form action="" method="post">
	<table align="center">
		<th colspan="3" align="center">Silahkan Login</th>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="login" value="login">
			</td>
		</tr>
	</table>

	<h1>belum punya akun? <a href="registrasi.php">regist</a></h1>
 -->
</body>
</html>