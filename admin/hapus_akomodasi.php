<?php 

include 'function.php';

$id = $_GET["id"];


if (delete_akomodasi ($id)) {
	echo "

		<script>
			alert('data berhasil di hapus');
			document.location.href = 'adm_akomodasi.php';
		</script>

		";
}else {

	echo "

		<script>
			alert('data gagal di hapus');
			document.location.href = 'adm_akomodasi.php';
		</script>

		";
}

 ?>