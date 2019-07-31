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
		<h2 align="center">Laporan Data Buku</h2><br>
		<div align = "center">
		<table border="1" class="table" align="center">
       		<tr>
				<th align="center">No</th>
                <th align="center">ID Buku</th>
                <th align="center">Judul Buku</th>
                <th align="center">Tahun Terbit</th>
                <th align="center">Kota Terbit</th>
                <th align="center">Penerbit</th>
                <th align="center">Pengarang</th>
                <th align="center">Kategori</th>
				<th align="center">Lokasi</th>
                <th align="center">ISBN</th>                     
            </tr>';                         

                $no = 1;

                $sql = $koneksi -> query("SELECT * FROM data_buku");

                while ($data = $sql->fetch_assoc()) {


				$content .='
                                   
			<tr>
				<td align="center">'.$no++.'</td>
				<td>'.$data['id_buku'].'</td>
				<td>'.$data['judul_buku'].'</td>
				<td>'.$data['tahun_terbit'].'</td>
				<td>'.$data['kota_terbit'].'</td>
				<td>'.$data['penerbit'].'</td>
				<td>'.$data['pengarang'].'</td>
				<td>'.$data['kategori'].'</td>
				<td>'.$data['lokasi_buku'].'</td>
				<td>'.$data['isbn'].'</td>

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