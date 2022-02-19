<?php
//koneksi ke data base
// star dulu session nya
session_start();

// //cek session login
if (!isset($_SESSION ["login"])) {
header("location: login.php");
exit;
}

include'function.php';

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
	<link rel="stylesheet" href="StyleCSSadmin.CSS">
	<title>Document</title>
	<script src="https://kit.fontawesome.com/98e6d8d46a.js" crossorigin="anonymous"></script>
</head>
<body>

	<div class="adm_destinasi">
		<!-- HEADER -->
		<div class="header">
			<div><h1>Jogja Pariwisata Management</h1></div>
			<div class="logout"><a href="logout.php"><h2>logout</h2></a></div>
		
		</div>
		
		<!-- END HEADER -->

		<!-- CONTENT -->
		<div class="content">
			<div class="main">
				<ul>
					<div class="nav"><li><a href="tampil_admin.php"><h3>Dashboard</h3></a></li></div>
					<div class="nav"><li><a href="adm_destinasi.php"><h3>Data Destinasi</h3></a></li></div>
					<div class="nav"><li><a href="adm_kuliner.php"><h3>Data Kuliner</h3></a></li></div>
					<div class="nav"><li><a href="adm_akomodasi.php"><h3>Data akomodasi</h3></a></li></div>
					<div class="nav"><li><a href="adm_senibudaya.php"><h3>Data Seni Budaya</h3></a></li></div>
					<div class="nav"><li><a href="adm_user.php"><h3>User</h3></a></li></div>
				</ul>
				
			</div>
		
			<div class="sidebar">
				<h1>SELAMAT DATANG DI DAFTAR DESTINASI,ADMIN</h1><hr>
				
				<div class="isi-sidebar">
					<div class="form">
						<form action="" method="post">
							<input size="40" type="text" name="keyword" placeholder="silahkan masukan" autocomplete="off" ><input type="submit" name="cari" value="cari">
							
						</form>
					</div>

					<div class="tambah">
						<a href="tambah_destinasi.php"><button>Tambah data destinasi</button></a>
					</div>
				</div>

				<div class="sidebar-main">
					<table>
						<tr>
							<th width="2%">nomor</th>
							<th width="15%">judul</th>
							<th width="10%">Gambar</th>
							<th width="50%">Artikel</th>
							<th width="15%">Lokasi</th>
							<th width="8%">aksi</th>
						</tr>

				 		<?php $i= 1; ?>
						<?php foreach ($ambil as $row): ?>

						<tr>
							<th><?php echo $i; ?></th>
							<td><?php echo $row["judul"]; ?></td>
							<td><img src="img/<?php echo $row["gambar"]; ?>"></td>
							<td><?php echo $row["artikel"]; ?></td>		
							<td> <div class="lokasi"><?php echo $row["lokasi"]; ?></div>  </td>
							<th>
								<a href="edit_destinasi.php?id=<?php echo $row["id"]; ?>"><i class="fas fa-pencil-alt"></i></a> |
								<a href="hapus_destinasi.php?id=<?php echo $row["id"] ?>" onclick = "return  confirm('anda yakin mengapus data ini?');"><i class="fas fa-trash-alt"></i></a> 
										 
							</th>
						</tr>
					
						<?php $i++; ?>
						<?php endforeach; ?>
					</table>

				</div>
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