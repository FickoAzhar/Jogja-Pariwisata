<?php 
// star dulu session nya
session_start();

// //cek session login
if (!isset($_SESSION ["login"])) {
header("location: login.php");
exit;
}

// koneksi ke data base

include'function.php';


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="StyleCSSadmin.CSS">
	<title>Document</title>
</head>
<body>
	<div class="tampil_admin">
		<!-- HEADER -->
		<div class="header">
			<div ><h1>Jogja Pariwisata Management</h1></div>
			<div class="logout"><a href="logout.php"><h2>logout</h2></a></div>
		</div>
		
		<!-- END HEADER -->

		<!-- CONTENT -->
		<div class="content">
			<h1>SELAMAT DATANG DI WEBSITE MANAJEMEN PARIWISATA JOGJA,ADMIN</h1>
			<h3>Mulai Edit Data?</h3>
			<div class="main">
				<a href="adm_destinasi.php" style= "text-decoration:none">
					<div class="box1">
						<div class="icon">
							<h2>Data Destinasi Wisata</h2><img src="img/destinasi.png" alt="" width="100">
						</div>
					</div>
				</a>
				<a href="adm_kuliner.php" style= "text-decoration:none">
					<div class="box2">
						<div class="icon">
							<h2>Data Kuliner</h2><img src="img/kuliner.png" alt="" width="100">
						</div>
					</div>
				</a>
				<a href="adm_akomodasi.php" style= "text-decoration:none">
					<div class="box3">
						<div class="icon">
							<h2>Data Akomodasi</h2><img src="img/akomodasi.png" alt="" width="100">
						</div>
					</div>
				</a>
			</div>
			<div class="box_dua">
				<a href="adm_senibudaya.php" style= "text-decoration:none">
					<div class="box4">
						<div class="icon">
							<h2>Data Seni Budaya</h2><img src="img/galeri.png" alt="" width="100">
						</div>
					</div>
				</a>
				<a href="adm_user.php" style= "text-decoration:none">
					<div class="box5">
						<div class="icon">
							<h2>Data User</h2><img src="img/bguser.png" alt="" width="100">
						</div>
					</div>
				</a>
			</div>
			
			
		</div>
		<!-- FOOTER -->
		<footer>
			<center>
				<span class="credit">Created By Kelompok 4 | </span>
				<span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
			</center>
		</footer>
		<!-- END FOOTER -->
	</div>
</body>
</html>