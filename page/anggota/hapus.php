<?php 

	$id_anggota = $_GET ['id'];

	$koneksi -> query ("delete from data_anggota where id_anggota='$id_anggota'");

?>

<script type="text/javascript">
	window.location.href="?page=anggota";
</script>