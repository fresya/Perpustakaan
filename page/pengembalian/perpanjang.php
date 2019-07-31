<?php
	$id_peminjaman 		  = $_GET['id_peminjaman'];
	$judul_buku   		  = $_GET['judul_buku'];
	$tanggal_pengembalian = $_GET['tanggal_pengembalian'];
	$lambat 			  = $_GET['lambat'];

	if($lambat > 0){
		?>
		<script type="text/javascript">
			alert("Pinjam Buku Tidak Dapat Diperpanjang, Karena Lebih dari 7 Hari.. Kembalikan Dahulu Kemudian Pinjam Kembali");
			window.location.href="?page=pengembalian";
		</script>
		<?php
	}else{
		$tujuh_hari=mktime(0,0,0, date("n"), date("j")+7, date("Y"));
		$hari_next=date("d-m-Y", $tujuh_hari);

		$sql = $koneksi -> query("update transaksi set tanggal_pengembalian='$hari_next' where id_peminjaman='$id_peminjaman'");

		if ($sql){
			?>
			<script type="text/javascript">
				alert("Perpanjangan Berhasil");
				window.location.href="?page=pengembalian";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alert("Perpanjangan Gagal");
				window.location.href="?page=pengembalian";
			</script>
			<?php
		}
	}

























