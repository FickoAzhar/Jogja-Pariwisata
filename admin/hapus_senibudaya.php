<?php 

include 'function.php';

$id = $_GET["id"];


if (delete_senibudaya ($id)) {
	echo "

		<script>
			alert('data berhasil di hapus');
			document.location.href = 'adm_senibudaya.php';
		</script>

		";
}else {

	echo "

		<script>
			alert('data gagal di hapus');
			document.location.href = 'adm_senibudaya.php';
		</script>

		";
}

 ?>