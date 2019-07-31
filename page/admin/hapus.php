<?php 

	$id_admin = $_GET ['id'];

	$koneksi -> query ("delete from data_admin where id_admin='$id_admin'");

?>

<script type="text/javascript">
	window.location.href="?page=admin";
</script>