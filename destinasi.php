<?php
//koneksi ke data base

include'admin/function.php';

//ambil data dari tabel mahasiswa / query

$ambil = query("SELECT * FROM tb_destinasi");

//Ketika tombol cari ditekan
if(isset($_POST ["cari"])){
	$ambil = cari ($_POST ["keyword"]);
}


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="StyleCSS.css">
	<title>Document</title>
	<script src="https://kit.fontawesome.com/98e6d8d46a.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="top-bar"></div>
	<div class="user_destinasi">	
		<div class="container">
			<div class="header2">
				<div class="logo"><img src="img/logo1.png" alt="" width="100"></div>
				<div class="navigasi">
					<ul>
						<li><a href="destinasi.php">Destinasi</a></li>
						<li><a href="akomodasi.php">Akomodasi</a></li>
						<li><a href="kuliner.php">kuliner</a></li>
						<li><a href="peta_wisata.php">Peta Wisata</a></li>
						<li><a href="seni_budaya.php">Seni Budaya</a></li>
					</ul>
				</div>
			</div>
			
			<div class="hiro2">
				<div class="isi-hiro">
					<div class="isi-hiro-atas">
						<a href="tampil_user.php">home</a> > destinasi
					</div>
					<div class="isi-hiro-tengah">
				
						<h1>wisata</h1><br>
						<h2>Menyediakan Informasi mengenai tempat wisata yang ada. informasi bisa berupa tempat wisata, alamat, fasilitas dan lokasi wisata</h2>
					</div>
				</div>
			</div>







			<div class="content cf">
				<div class="sidebar">
					<div class="isi-sidebar">
						<h1>PENCARIAN</h1><hr>
						<form action="" method="post">
							<input type="text" name="keyword" placeholder="silahkan masukan" autocomplete="off">
							<input type="submit" name="cari" value="cari">
						</form>
					</div>
					<div class="isi-sidebar">
						<h1>DAFTAR WISATA</h1><hr>
							<?php $i= 1; ?>
							<?php foreach ($ambil as $row): ?>

							<a href="masuk_destinasi.php?id=<?php echo $row["id"]; ?>">
							<h2><?php echo $i; ?>
							<?php echo $row["judul"]; ?></h2>
							</a>
							<?php $i++; ?>
							<?php endforeach; ?>
						
					</div>
				</div>

				<div class="main">
					
						<?php foreach ($ambil as $row): ?>		
					<div class="data">	
						<a href="masuk_destinasi.php?id=<?php echo $row["id"]; ?>">
							<span><h1><?php echo $row["judul"] ?></h1></span>			
							<img src="admin/img/<?php echo $row["gambar"]; ?>" width="240" height="130"> <br>		
							<span><h3><?php echo $row["artikel"]; ?></h3></span>	
						</a>		
					</div>		
						<?php endforeach; ?>
					
				</div>
			</div>


			<footer>
			    <div class="main-content">
			        <div class="left box">
			        	<h2>ABOUT US</h2><hr>
			         	<div class="footer-content">
			            	<p>Website Pariwisata jogja merupakan website yang menyediakan informasi-informasi mengenai tempat wisata, akomodasi, kuliner dan peta wisata yang ada di jogja</p>
			            	<div class="social">
					            <a href="#"><span class="fab fa-facebook-f"></span></a>
					            <a href="#"><span class="fab fa-twitter"></span></a>
					            <a href="#"><span class="fab fa-instagram"></span></a>
					            <a href="#"><span class="fab fa-youtube"></span></a>
			            	</div>
			          	</div>
			        </div>

			        <div class="center box">
			        	<h2>ADDRESS</h2><hr>
			        	<div class="footer-content">
			            	<div class="place">
			              		<span class="fas fa-map-marker-alt"></span>
			              		<span class="text">Jawa Tengah, Indonesia</span>
			            	</div>
			            	<div class="phone">
			            		<span class="fas fa-phone-alt"></span>
			              		<span class="text">+62 8157589139</span>
			            	</div>
			            	<div class="email">
			              		<span class="fas fa-envelope"></span>
			              		<span class="text">kelompok4@gmail.com</span>
			            	</div>
			          	</div>
			        </div>

			        <div class="right box">
			          	<h2>CONTACT US</h2><hr>
			          	<div class="footer-content">
			            	<form action="#">
			              		<div class="email">
			                		<div class="text">Email *</div>
			                		<input type="email" required>
			              		</div>
			              		<div class="msg">
			                		<div class="text">Message *</div>
			                		<textarea name="pesan" id="" cols="10" rows="3"></textarea>
			              		</div>
			              		<div class="btn">
			                		<button type="submit">Send</button>
			              		</div>
			            	</form>
			          	</div>
			        </div>
			    </div>
			    <div class="bottom">
			        <center>
			          	<span class="credit">Created By Kelompok 4 | </span>
			          	<span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
			       	</center>
			    </div>
    		</footer>
		</div>

	</div>	
</body>
</html>