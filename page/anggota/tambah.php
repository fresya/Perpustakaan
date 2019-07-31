<?php require 'config.php'; ?>
<div class="panel panel-success">
<div class="panel-heading">
            <b>Tambah Data Anggota</b>
</div>
<?php


$query = "select max(id_anggota) as maxKode from data_anggota";
$hasil = mysqli_query($db, $query);
$data  = mysqli_fetch_array($hasil);
$id = $data['maxKode'];

$noUrut = (int) substr($id, 3, 3);
$noUrut++;
$char = "ANG";
$newID = $char . sprintf("%03s", $noUrut);
?>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                   
                                    <form method="POST">

                                         <div class="form-group">
                                            <label for="id_anggota">NIS</label>
                                            <input class="form-control" type="text" id="id_anggota" name="id_anggota" required="" />
                                        </div>

                                         <div class="form-group">
                                            <label for="nama_anggota">Nama Anggota</label>
                                            <input class="form-control" name="nama_anggota" required="" />
                                        </div>

                                        <div class="form-group">
                                            <label for="no_hp">No Telp</label>
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
                                            <label>Kelas</label>
                                            <select class="form-control" name="status" required="">
                                               <option>Pilih</option>
                                               <option value="X">X</option>
                                               <option value="XI">XI</option>
                                               <option value="XII">XII</option>
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

$id_anggota        = $_POST ['id_anggota'];
$nama_anggota      = $_POST ['nama_anggota'];
$no_hp             = $_POST ['no_hp'];
$jenis_kelamin     = $_POST ['jenis_kelamin'];
$alamat            = $_POST ['alamat'];
$status            = $_POST ['status'];
$jatah_pinjam      = $_POST ['jatah_pinjam'];

$Simpan            = $_POST ['Simpan'];

if ($Simpan) {
    
    $sql = $koneksi -> query("insert into data_anggota (id_anggota, nama_anggota, no_hp, jenis_kelamin, alamat, status, jatah_pinjam) values ('$id_anggota','$nama_anggota','$no_hp','$jenis_kelamin','$alamat', '$status','3')");

        if ($sql) {
            ?>
            <script type="text/javascript">
                
            alert ("Data Berhasil Disimpan");
            window.location.href="?page=anggota";

            </script>
        <?php

        }
    }
?>