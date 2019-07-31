<?php require 'config.php'; ?>
<div class="panel panel-success">
<div class="panel-heading">
			<b>Tambah Data Buku</b>
</div>
<?php
$sql = $koneksi -> query("SELECT max(id_buku) as maxKode FROM data_buku");
 while ($data = $sql->fetch_assoc()) {

$id = $data['maxKode'];
 }


$noUrut = (int) substr($id, 3, 3);
$noUrut++;
$char = "BKU";
$newID = $char . sprintf("%03s", $noUrut);
?>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                   
                                    <form method="POST">
									
									<div class="form-group">
                                            <label for="id_buku">ID Buku</label>
                                            <input class="form-control" type="text" id="id_buku" name="id_buku"value="<?php echo $newID;?>" required="" readonly = ""/>
                                        </div>

                                         <div class="form-group">
                                            <label>Judul Buku</label>
                                            <input class="form-control" name="judul_buku" required="" />
                                        </div>

                                         <div class="form-group">
                                            <label>Tahun Terbit</label>
                                           <select class="form-control" name="tahun_terbit" required="">
                                               <?php 

                                               $tahun = date("Y");

                                               for ($i=$tahun-25; $i <= $tahun; $i++) { 
                                                echo'

                                                    <option value ="'.$i.'"">'.$i.'</option>

                                                ';
                                               }

                                               ?>
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label>Kota Terbit</label>
                                            <input class="form-control" name="kota_terbit" required="" />
                                        </div>

                                         <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" required="" />
                                        </div>

                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" required="" />
                                        </div>

                                         <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" name="kategori" required="">
                                               <option value="Pilih">Pilih</option>
                                               <option value="Buku">Buku</option>
                                               <option value="Jurnal">Jurnal</option>
                                               <option value="Tabloid">Tabloid</option>
                                               <option value="Kitab">Kitab</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Lokasi</label>
                                            <select class="form-control" name="lokasi_buku" required="">
                                               <option value="rak1">Pilih</option>
                                               <option value="rak1">Rak 1</option>
                                               <option value="rak2">Rak 2</option>
                                               <option value="rak3">Rak 3</option>
                                               <option value="rak4">Rak 4</option>
                                               <option value="rak5">Rak 5</option>
                                               </select>
                                        </div>

                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input class="form-control" name="isbn" required="" />
                                        </div>
                                        <div>

                                          <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input class="form-control" name="jumlah_buku" required="" />
                                        </div>
                                        <div>
                                        	
                                        	<input type="Submit" name="Simpan" value="Simpan" class="btn btn-success">
                                          <a href = "?page=buku" target="blank" class="btn btn-danger">Tutup</a>
                                        </div>
                                    </div>

                            </form>
                         </div>
</div>
</div>
</div>

<?php

$id_buku          = $_POST ['id_buku'];
$judul_buku       = $_POST ['judul_buku'];
$tahun_terbit     = $_POST ['tahun_terbit'];
$kota_terbit      = $_POST ['kota_terbit'];
$penerbit         = $_POST ['penerbit'];
$pengarang        = $_POST ['pengarang'];
$kategori         = $_POST ['kategori'];
$lokasi_buku      = $_POST ['lokasi_buku'];
$isbn             = $_POST ['isbn'];
$jumlah_buku      = $_POST ['jumlah_buku'];

$Simpan           = $_POST ['Simpan'];

if ($Simpan) {
	
	$sql = $koneksi -> query("insert into data_buku (id_buku, judul_buku, tahun_terbit, kota_terbit, penerbit, pengarang, kategori, lokasi_buku, isbn, jumlah_buku) values ('$id_buku','$judul_buku','$tahun_terbit','$kota_terbit','$penerbit','$pengarang','$kategori','$lokasi_buku','$isbn','$jumlah_buku')");

		if ($sql) {
			?>
			<script type="text/javascript">
				
			alert ("Data Berhasil Disimpan");
            window.location.href="?page=buku";

			</script>
		<?php

		}
	}
?>