<?php

    $id_admin = $_GET['id'];

    $sql = $koneksi->query("SELECT * FROM data_admin where id_admin ='$id_admin'");

    $tampil = $sql->fetch_assoc();

    $jenis_kelamin = $tampil['jenis_kelamin'];

?>

<div class="panel panel-success">
<div class="panel-heading">
            <b>Edit Data Admin</b> 
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                   
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input class="form-control" name="id_admin" value="<?php echo $tampil['id_admin'];?>"readonly />
                                        </div>
                                         <div class="form-group">
                                            <label>Nama Admin</label>
                                            <input class="form-control" name="nama_admin" value="<?php echo $tampil['nama_admin'];?>" />
                                        </div>


                                         <div class="form-group">
                                            <label>No. Telp</label>
                                            <input class="form-control" name="no_hp" value="<?php echo $tampil['no_hp'];?>"/>
                                        </div>

                                        <div class = "form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin">
                                                 <option value="<?php echo $tampil['jenis_kelamin']; ?>"><?php echo $tampil['jenis_kelamin']; ?></option>
                                                <option value="laki-laki" <?php if ($jenis_kelamin=='laki-laki') {echo "selected";} ?>>Laki-Laki</option>
                                                <option value="perempuan" <?php if ($jenis_kelamin=='perempuan') {echo "selected";} ?>>Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" value="<?php echo $tampil['alamat'];?>"/>
                                        </div>
										
										<div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" value="<?php echo $tampil['email'];?>"/>
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

$id_admin         = $_POST ['id_admin'];
$nama_admin       = $_POST ['nama_admin'];
$no_hp            = $_POST ['no_hp'];
$jenis_kelamin    = $_POST ['jenis_kelamin'];
$alamat           = $_POST ['alamat'];
$email            = $_POST ['email'];
$Simpan           = $_POST ['Simpan'];

if ($Simpan) {
    
    $sql = $koneksi -> query("UPDATE data_admin set nama_admin='$nama_admin', no_hp='$no_hp', jenis_kelamin='$jenis_kelamin', alamat='$alamat', email='$email' where id_admin ='$id_admin'");

        if ($sql) {
            ?>
            <script type="text/javascript">
                
            alert ("Data Berhasil Diubah");
            window.location.href="?page=admin";

            </script>
        <?php

        }
    }
?>