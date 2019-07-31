<?php 

	$id_buku = $_GET ['id'];

	$koneksi -> query ("delete from data_buku where id_buku='$id_buku'");

?>

<script type="text/javascript">
	window.location.href="?page=buku";
</script>