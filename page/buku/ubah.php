<?php

    $id_buku = $_GET['id'];

    $sql = $koneksi->query("SELECT * FROM data_buku where id_buku ='$id_buku'");

    $tampil = $sql->fetch_assoc();

    $tahun_terbit2 = $tampil['tahun_terbit'];

    $kategori = $tampil['kategori'];

?>

<div class="panel panel-success">
<div class="panel-heading">
            <b>Edit Data Buku</b> 
</div>
<div class="panel-body">
                         <div class="row">
                                <div class="col-md-12">
                                   
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>ID Buku</label>
                                            <input class="form-control" name="id_buku" value="<?php echo $tampil['id_buku'];?>" readonly />
                                        </div>

                                         <div class="form-group">
                                            <label>Judul Buku</label>
                                            <input class="form-control" name="judul_buku" value="<?php echo $tampil['judul_buku'];?>"/>
                                        </div>

                                         <div class="form-group">
                                            <label>Tahun Terbit</label>
                                           <select class="form-control" name="tahun_terbit">
                                               <?php 

                                               $tahun_terbit = date("Y");

                                               for ($i=$tahun_terbit-25; $i <= $tahun_terbit; $i++) { 
                                                
                                                    if ($i==$tahun_terbit2 ) {
                                                    echo'<option value ="'.$i.'" selected>'.$i.'</option>';

                                                    }else{

                                                    echo'<option value ="'.$i.'"">'.$i.'</option>';
                                                    }
                                                
                                              
                                               }

                                            ?>
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label>Kota Terbit</label>
                                            <input class="form-control" name="kota_terbit" value="<?php echo $tampil['kota_terbit'];?>"/>
                                        </div>

                                         <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" value="<?php echo $tampil['penerbit'];?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" value="<?php echo $tampil['pengarang'];?>"/>
                                        </div>

                                          <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" name="kategori" required="">
                                             <option value="<?php echo $tampil['kategori'];?>"><?php echo $tampil['kategori']; ?></option>
                                            <option value="Buku" <?php if ($kategori=='Buku') {echo "selected";} ?>>Buku</option>
                                            <option value="Jurnal" <?php if ($kategori=='Jurnal') {echo "selected";} ?>>Jurnal</option>
                                            <option value="Tabloid" <?php if ($kategori=='Tabloid') {echo "selected";} ?>>Tabloid</option>
                                            <option value="Kitab" <?php if ($kategori=='Kitab') {echo "selected";} ?>>Kitab</option>
                                            </select>
                                        </div> 
										<div class="form-group">
                                            <label>Lokasi</label>
                                            <select class="form-control" name="lokasi_buku" required="">
                                            <option value="<?php echo $tampil['lokasi_buku'];?>"><?php echo $tampil['lokasi_buku']; ?></option>
                                            <option value="Rak 1" <?php if ($lokasi_buku=='Rak 1') {echo "selected";} ?>>Rak 1</option>
                                            <option value="Rak 2" <?php if ($lokasi_buku=='Rak 2') {echo "selected";} ?>>Rak 2</option>
                                            <option value="Rak 3" <?php if ($lokasi_buku=='Rak 3') {echo "selected";} ?>>Rak 3</option>
                                            <option value="Rak 4" <?php if ($lokasi_buku=='Rak 4') {echo "selected";} ?>>Rak 4</option>
                                            <option value="Rak 5" <?php if ($lokasi_buku=='Rak 5') {echo "selected";} ?>>Rak 5</option>
                                            </select>
                                        </div> 

                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input class="form-control" name="isbn" value="<?php echo $tampil['isbn'];?>" />
                                        </div>
                                        <div>

                                         <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input class="form-control" name="jumlah_buku" value="<?php echo $tampil['jumlah_buku'];?>" />
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
    
     $sql = $koneksi -> query("UPDATE data_buku set judul_buku='$judul_buku', tahun_terbit='$tahun_terbit', kota_terbit='$kota_terbit', penerbit='$penerbit', pengarang='$pengarang', kategori='$kategori', lokasi_buku='$lokasi_buku', isbn='$isbn', jumlah_buku='$jumlah_buku' where id_buku ='$id_buku'");


        if ($sql) {
            ?>
            <script type="text/javascript">
   
            alert ("Data Berhasil Diubah");
            window.location.href="?page=buku";

            </script>
        <?php

        }
    }
?>
        