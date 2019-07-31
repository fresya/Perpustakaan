<?php  

$id_peminjaman = $_GET['id_peminjaman'];

$judul_buku = $_GET['judul_buku'];

$nama_anggota = $_GET['nama_anggota'];


$sql = $koneksi->query("update transaksi set status='Kembali' where id_peminjaman='$id_peminjaman'");

$sql = $koneksi->query("update data_buku set jumlah_buku =(jumlah_buku+1) where judul_buku='$judul_buku'");

$sql = $koneksi->query("update data_anggota set jatah_pinjam =(jatah_pinjam+1) where nama_anggota='$nama_anggota'");


?>

	<script type="text/javascript">
		alert ("Proses Pengembalian Buku Berhasil");

		window.location.href="?page=pengembalian";
	</script>


	<?php
	 
?>