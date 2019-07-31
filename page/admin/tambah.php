<?php require 'config.php'; ?>
<div class="panel panel-success">
<div class="panel-heading">
            <b>Tambah Data Admin</b>
</div>
<?php


$query = "select max(id_admin) as maxKode from data_admin";
$hasil = mysqli_query($db, $query);
$data  = mysqli_fetch_array($hasil);
$id = $data['maxKode'];

$noUrut = (int) substr($id, 3, 3);
$noUrut++;
$char = "ADM";
$newID = $char . sprintf("%03s", $noUrut);
?>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                   
                                    <form method="POST">

                                         <div class="form-group">
                                            <label for="id_admin">NIK</label>
                                            <input class="form-control" type="text" id="id_admin" name="id_admin" required=""  />
                                        </div>

                                         <div class="form-group">
                                            <label>Nama Admin</label>
                                            <input class="form-control" name="nama_admin" required="" />
                                        </div>


                                         <div class="form-group">
                                            <label>No Telp</label>
                                            <input class="form-control" name="no_hp" required="" />
                                        </div>

                                         <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin" required="">
                                               <option>Pilih</option>
                                               <option value="laki-laki">Laki-Laki</option>
                                               <option value="perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        

                                         <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" required="" />
                                        </div>
										
										<div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" required="" />
                                        </div>

                                
                                            <input type="Submit" name="Simpan" value="Simpan" class="btn btn-success">
                                          <a href = "?page=admin" target="blank" class="btn btn-danger">Tutup</a>
                                        </div>
                                    </div>

                            </form>
                         </div>
</div>
</div>
</div>

<?php

$id_admin          = $_POST ['id_admin'];
$nama_admin        = $_POST ['nama_admin'];
$no_hp             = $_POST ['no_hp'];
$jenis_kelamin     = $_POST ['jenis_kelamin'];
$alamat            = $_POST ['alamat'];
$email             = $_POST ['email'];

$Simpan            = $_POST ['Simpan'];

if ($Simpan) {
    
    $sql = $koneksi -> query("insert into data_admin (id_admin, nama_admin, no_hp, jenis_kelamin, alamat, email) values ('$id_admin','$nama_admin','$no_hp','$jenis_kelamin','$alamat','$email')");

        if ($sql) {
            ?>
            <script type="text/javascript">
                
            alert ("Data Berhasil Disimpan");
            window.location.href="?page=admin";

            </script>
        <?php

        }
    }
?>