<?php

    $id_anggota = $_GET['id'];

    $sql = $koneksi->query("SELECT * FROM data_anggota where id_anggota ='$id_anggota'");

    $tampil = $sql->fetch_assoc();

    $jenis_kelamin = $tampil['jenis_kelamin'];

    $status = $tampil['status'];

?>

<div class="panel panel-success">
<div class="panel-heading">
            <b>Edit Data Anggota</b> 
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                   
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>NIS</label>
                                            <input class="form-control" name="id_anggota" required="" value="<?php echo $tampil['id_anggota'];?>" readonly />
                                        </div>

                                         <div class="form-group">
                                            <label>Nama Anggota</label>
                                            <input class="form-control" name="nama_anggota" required="" value="<?php echo $tampil['nama_anggota'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>No Telp</label>
                                            <input class="form-control" name="no_hp" required="" value="<?php echo $tampil['no_hp'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin">
                                                <option value="<?php echo $tampil['jenis_kelamin']; ?>"><?php echo $tampil['jenis_kelamin']; ?></option>
                                                <option value="laki-laki" <?php if ($jenis_kelamin=='laki-laki') {echo "selected";} ?>>Laki-Laki</option>
                                                <option value="perempuan" <?php if ($jenis_kelamin=='perempuan') {echo "selected";} ?>>Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" required="" value="<?php echo $tampil['alamat'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="status">
                                                <option value="<?php echo $tampil['status'];?>"><?php echo $tampil['status'];?></option>
                                                <option value="X" <?php if ($status=='X') {echo "selected";} ?>>X</option>
                                                <option value="XI" <?php if ($status=='XI') {echo "selected";} ?>>XI</option>
                                                <option value="XII" <?php if ($status=='XII') {echo "selected";} ?>>XII</option>
                                            </select>
                                        </div>
                                            
                                            <input type="Submit" name="Simpan" value="Simpan" class="btn btn-success">
                                            <a href = "?page=anggota" target="blank" class="btn btn-danger">Tutup</a>
                                        </div>
                                    </div>

                            </form>
                         </div>
</div>
</div>
</div>

<?php

$id_anggota       = $_POST ['id_anggota'];
$nama_anggota     = $_POST ['nama_anggota'];
$no_hp            = $_POST ['no_hp'];
$jenis_kelamin    = $_POST ['jenis_kelamin'];
$alamat           = $_POST ['alamat'];
$status           = $_POST ['status'];
$Simpan           = $_POST ['Simpan'];

if ($Simpan) {
    
    $sql = $koneksi -> query("UPDATE data_anggota set nama_anggota='$nama_anggota', no_hp='$no_hp',jenis_kelamin='$jenis_kelamin', alamat='$alamat', status='$status' where id_anggota ='$id_anggota'");

        if ($sql) {
            ?>
            <script type="text/javascript">
                
            alert ("Data Berhasil Diubah");
            window.location.href="?page=anggota";

            </script>
        <?php

        }
    }
?>