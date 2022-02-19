<?php 

include 'function.php';

$id = $_GET["id"];


if (delete ($id)) {
	echo "

		<script>
			alert('data berhasil di hapus');
			document.location.href = 'adm_kuliner.php';
		</script>

		";
}else {

	echo "

		<script>
			alert('data gagal di hapus');
			document.location.href = 'adm_kuliner.php';
		</script>

		";
}

 ?>