<?php
//koneksi ke data base

include'admin/function.php';

//ambil data dari tabel mahasiswa / query
$id=$_GET["id"];

$data= query("SELECT * FROM tb_destinasi WHERE id = $id")[0];
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
	<link rel="stylesheet" href="StyleCSS.CSS">
	<script src="https://kit.fontawesome.com/98e6d8d46a.js" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<body>
	<div class="top-bar"></div>
	<div class="user_destinasi">	
		<div class="container2">
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
			<div class="main">
					<div class="isi-main">	
						<h4> <a href="tampil_user.php">Home</a> > <a href="destinasi.php">Destinasi</a>>Wisata</h4>
						<span class="judul"><h1><?php echo $data["judul"]; ?></h1></span>		
						<span class="gambar"><img src="admin/img/<?php echo $data["gambar"]; ?>" width="100%" height="400"></span>
						<span class="artikel"><h2><?= $data["artikel"]; ?></h2></span>
						<span class="loc"><h1>LOKASI MAPS</h1></span>
						<iframe class="maps" src="<?= $data["lokasi"]; ?>"></iframe>		
					</div>	
				<div class="sidebar">
					<div class="isi-sidebar">
						<h1>WISATA LAINNYA</h1><hr>
						<div class="isi-data">
							<?php foreach ($ambil as $row): ?>		
							<div class="data">
								<a href="masuk_destinasi.php?id=<?php echo $row["id"]; ?>">
									<span><h3><?php echo $row["judul"]; ?></h3></span>	
									<span><img src="admin/img/<?php echo $row["gambar"]; ?>"> </span>
								</a>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
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

