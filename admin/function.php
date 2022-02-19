<?php 

//membuat konkesi
$koneksi= mysqli_connect("localhost","root","","db_pariwisata");

//kita buat function untuk ambil data dari table karyawan

function query($query) {

	global $koneksi;
	$result=mysqli_query($koneksi, $query);
	$rows =[];
	while ($row = mysqli_fetch_assoc ($result)) {
		$rows[]= $row;
	}
	return $rows;
}

function simpan($data){
	global $koneksi;
 
	$judul = htmlspecialchars($data["judul"]);  
	$gambar = upload();
	if (!$gambar) {
		return false;
	}
	$artikel = htmlspecialchars($data["artikel"]);
	$lokasi = htmlspecialchars($data["lokasi"]);

	//upload gambar dahulu

	

	$query = "INSERT INTO tb_destinasi
		values 
	('','$judul','$gambar','$artikel','lokasi')";

	mysqli_query($koneksi, $query);
	
	return mysqli_affected_rows($koneksi);

}

function save($data){
	global $koneksi;
 
	$nama = htmlspecialchars($data["nama"]);  
	$gambar = upload();
	if (!$gambar) {
		return false;
	}
	$artikel = htmlspecialchars($data["artikel"]);
	$letak = htmlspecialchars($data["letak"]);

	//upload gambar dahulu

	

	$query = "INSERT INTO tb_kuliner
		values 
	('','$nama','$gambar','$artikel','$letak')";

	mysqli_query($koneksi, $query);
	
	return mysqli_affected_rows($koneksi);
}
function save_akomodasi($data){
	global $koneksi;
 
	$nama = htmlspecialchars($data["nama"]);  
	$gambar = upload();
	if (!$gambar) {
		return false;
	}
	$artikel = htmlspecialchars($data["artikel"]);
	$lokasi = htmlspecialchars($data["lokasi"]);

	//upload gambar dahulu

	

	$query = "INSERT INTO tb_akomodasi
		values 
	('','$nama','$gambar','$artikel','$lokasi')";

	mysqli_query($koneksi, $query);
	
	return mysqli_affected_rows($koneksi);
}
function save_senibudaya($data){
	global $koneksi;
 
	$nama = htmlspecialchars($data["nama"]);  
	$gambar = upload();
	if (!$gambar) {
		return false;
	}
	$artikel = htmlspecialchars($data["artikel"]);
	//upload gambar dahulu

	

	$query = "INSERT INTO tb_senibudaya
		values 
	('','$nama','$gambar','$artikel')";

	mysqli_query($koneksi, $query);
	
	return mysqli_affected_rows($koneksi);
}
function save_masukan($data){
	global $koneksi;
 
	$email = htmlspecialchars($data["email"]);  
	$masukan = htmlspecialchars($data["masukan"]);
	
	//upload gambar dahulu

	

	$query = "INSERT INTO tb_ic
		values 
	('','$email','$masukan')";

	mysqli_query($koneksi, $query);
	
	return mysqli_affected_rows($koneksi);
}
function hapus($id){

	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_destinasi where id = $id");

	return mysqli_affected_rows($koneksi);
}

function delete($id){

	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_kuliner where id = $id");

	return mysqli_affected_rows($koneksi);
}
function delete_akomodasi($id){

	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_akomodasi where id = $id");

	return mysqli_affected_rows($koneksi);
}
function delete_senibudaya($id){

	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_senibudaya where id = $id");

	return mysqli_affected_rows($koneksi);
}
function delete_admin($id){

	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM admin where id = $id");

	return mysqli_affected_rows($koneksi);
}

function ubah($data){

	global $koneksi;

	$id = $data["id"];
	$judul = htmlspecialchars($data["judul"]);  
	$artikel = htmlspecialchars($data["artikel"]);
	$lokasi = htmlspecialchars($data["lokasi"]);

	if($_FILES['gambar']['error'] === 4){
		$gambar = $gambar;
	} else{
		$gambar = upload();
	}
	$query = "UPDATE tb_destinasi SET
	judul ='$judul',
	gambar = '$gambar',
	artikel ='$artikel',
	lokasi = '$lokasi'

	WHERE id = $id
	";

	mysqli_query($koneksi, $query);
	
	return mysqli_affected_rows($koneksi);
}

function edit($data){

	global $koneksi;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);  
	$artikel = htmlspecialchars($data["artikel"]);
	$letak = htmlspecialchars($data["letak"]);

	if($_FILES['gambar']['error'] === 4){
		$gambar = $gambar;
	} else{
		$gambar = upload();
	}

	$query = "UPDATE tb_kuliner SET
	nama ='$nama',
	gambar = '$gambar',
	artikel ='$artikel',
	letak = '$letak'

	WHERE id = $id
	";

	mysqli_query($koneksi, $query);
	
	return mysqli_affected_rows($koneksi);
}
function edit_akomodasi($data){

	global $koneksi;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);  
	$artikel = htmlspecialchars($data["artikel"]);
	$lokasi = htmlspecialchars($data["lokasi"]);

	if($_FILES['gambar']['error'] === 4){
		$gambar = $gambar;
	} else{
		$gambar = upload();
	}

	$query = "UPDATE tb_akomodasi SET
	nama ='$nama',
	gambar = '$gambar',
	artikel ='$artikel',
	lokasi = '$lokasi'

	WHERE id = $id
	";

	mysqli_query($koneksi, $query);
	
	return mysqli_affected_rows($koneksi);
}

function edit_senibudaya($data){

	global $koneksi;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);  
	$artikel = htmlspecialchars($data["artikel"]);

	if($_FILES['gambar']['error'] === 4){
		$gambar = $gambar;
	} else{
		$gambar = upload();
	}

	$query = "UPDATE tb_senibudaya SET
	nama ='$nama',
	gambar = '$gambar',
	artikel ='$artikel'


	WHERE id = $id
	";

	mysqli_query($koneksi, $query);
	
	return mysqli_affected_rows($koneksi);
}
function upload (){
//ambil dulu file yang di kirim dengan $_FILES

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

//cek apakah tidak ada gambar yg di upload
if ($error === 4) {
	echo " <script>
			alert ('pilih gambar dahulu');
			</script>";
	return false;
}

//cek apakah yang di upload gambar atau bukan
$ekstensiGambarValid = ['jpg','jpeg','png'];
$ekstensiGambar = explode('.', $namaFile);
$ekstensiGambar = strtolower(end ($ekstensiGambar));

if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
	echo " <script>
			alert ('yang anda upload bukan gambar');
			</script>";
	return false;
}

// cek jika ukuran terlalu besar
if ($ukuranFile > 2000000) {
	echo " <script>
			alert ('ukuran terlalu besar, ganti yang lain atau rubah ukuran');
		</script>";
	return false;
}

//jika upload lolos
//generate nama gambar baru

$namaFileBaru = uniqid();
$namaFileBaru .='.';
$namaFileBaru.= $ekstensiGambar;


move_uploaded_file($tmpName, 'img/'.$namaFileBaru);

return $namaFileBaru;
}

//fungsi cari
function cari ($keyword){
	$query = "SELECT * FROM tb_destinasi
				WHERE
				judul like '%$keyword%' 

	";
	return query($query);
}
function search ($keyword){
	$query = "SELECT * FROM tb_kuliner
				WHERE
				nama like '%$keyword%' 

	";
	return query($query);
}
function search_akomodasi ($keyword){
	$query = "SELECT * FROM tb_akomodasi
				WHERE
				nama like '%$keyword%' 

	";
	return query($query);
}
function search_senibudaya ($keyword){
	$query = "SELECT * FROM tb_senibudaya
				WHERE
				nama like '%$keyword%' 

	";
	return query($query);
}
function search_admin ($keyword){
	$query = "SELECT * FROM admin
				WHERE
				username like '%$keyword%' 

	";
	return query($query);
}
function search_kuliner ($keyword){
	$query = "SELECT * FROM tb_kuliner
				WHERE
				nama like '%$keyword%' 

	";
	return query($query);
}

//buat fuanction registrasi
function registrasi($data){
	global $koneksi;

	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($koneksi,$data["password"]);
	$password2 = mysqli_real_escape_string($koneksi,$data["password2"]);


	//cek apakah username sudah ada atau belum

	$result = mysqli_query($koneksi, "SELECT username FROM admin WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "
			<script>
			alert('username sudah terdaftar, Silahkan Coba lagi.');
			</script>
		";
		return false;
	}

	//cek konfirmasi password

	if ($password !== $password2) {
		echo "<script>
			alert('Konfirmasi password tidak sesuai, Cobalagi');
			</script>";
		return false;
	}

	//enkripsi password (ada dua yaitu md5 dan hash )

	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan user baru ke data base

	mysqli_query($koneksi, "INSERT INTO admin values 
		('','$username','$password')");


		return mysqli_affected_rows($koneksi);
}


 ?>
