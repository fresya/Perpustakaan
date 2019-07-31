<?php
$koneksi = new mysqli("localhost", "root", "","perpustakaan");
$content = '
	<style type="text/css">
		.table{border-collapse: collapse;}
		.table th{padding: 8px 5px; background-color: lightgrey;}
	</style>
';
	$content .= '
	<page>
		<h2 align="center">Laporan Data Peminjaman & Pengembalian</h2><br>
		<div align = "center">
		<table border="1" class="table" align="center">
			<tr>
				<th>No</th>
                <th>ID Peminjaman</th>
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>                     
            </tr>';
                                   
            $no = 1;

			$sql = $koneksi -> query("SELECT * FROM transaksi where status='Kembali'");

			while ($data = $sql ->fetch_assoc()) {

			$content .='


			<tr>
				<td align="center">'.$no++.'</td>
				<td>'.$data['id_peminjaman'].'</td>
				<td>'.$data['nama_anggota'].'</td>
				<td>'.$data['judul_buku'].'</td>
				<td>'.$data['tanggal_peminjaman'].'</td>
				<td>'.$data['tanggal_pengembalian'].'</td>
            </tr>

            ';
            }
        $content .='
        </table></div>

        </page>';                 
                                        
	require_once('../assets/html2pdf/html2pdf.class.php');
	$html2pdf = new HTML2PDF('P','A3','fr');
	$html2pdf -> WriteHTML($content);
	$html2pdf -> Output('LaporanAdmin.pdf');

	?>