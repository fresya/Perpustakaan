<?php require 'config.php'; ?>
<?php

$tanggal_peminjaman=date("d-m-Y");
$tujuh_hari=mktime(0,0,0, date("n"), date("j")+7, date("Y"));
$tanggal_pengembalian=date("d-m-Y", $tujuh_hari);

?>

<div class="panel panel-success">
<div class="panel-heading">
   <b>   Tambah Data</b>
</div>
<?php

$sql = $koneksi -> query("SELECT max(id_peminjaman) as maxKode FROM transaksi");
 while ($data = $sql->fetch_assoc()) {

$id = $data['maxKode'];
 }

$noUrut = (int) substr($id, 3, 3);
$noUrut++;
$char = "TRN";
$newID = $char . sprintf("%03s", $noUrut);
?>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                   
                                    <form method="POST">

                                         <div class="form-group">
                                            <label for="id_peminjaman">ID Transaksi</label>
                                            <input class="form-control" type="text" id="id_peminjaman" name="id_peminjaman" value="<?php echo $newID;?>" required="" readonly = ""/>
                                        </div>
                                       
                                         <div class="form-group">
                                            <label>ID Anggota</label>
                                            <select class="form-control" name="nama_anggota">
                                               <?php

                                               $sql =$koneksi->query("SELECT * from data_anggota where jatah_pinjam > '0'");
                                               while ($data=$sql->fetch_assoc()) {
                                                 echo "<option value='$data[nama_anggota]'>$data[id_anggota] - $data[nama_anggota]</option>";
                                               }

                                               ?>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Judul Buku</label>
                                            <select class="form-control" name="judul_buku">
                                               <?php

                                               $sql =$koneksi->query("select * from data_buku order by id_buku");
                                               while ($data=$sql->fetch_assoc()) {
                                                echo "<option value='$data[id_buku] - $data[judul_buku]'>$data[id_buku] - $data[judul_buku]</option>";
                                               }

                                               ?>
                                            </select>
                                        </div>

                                        <div>
                                             <label>Tanggal Peminjaman</label>
                                            <input class="form-control" type="text" name="tanggal_peminjaman" id="tanggal" value="<?php echo $tanggal_peminjaman;?>" readonly />
                                        </div><br>

                                        <div>
                                         <label>Tanggal Pengembalian</label>
                                            <input class="form-control" type="text" name="tanggal_pengembalian" id="tanggal" value="<?php echo $tanggal_pengembalian;?>" readonly />
                                        </div>
<br>
                                       <div>
                                          
                                          <input type="Submit" name="simpan" value="Simpan" class="btn btn-success">
                                          <a href = "?page=peminjaman" target="blank" class="btn btn-danger">Tutup</a>
                                        </div>
                                      </div>
                                    </div>

                            </form>
                         </div>
</div>
</div>
</div>

<?php

if (isset($_POST['simpan'])) {

  $id_peminjaman=$_POST['id_peminjaman'];

  $nama_anggota=$_POST['nama_anggota'];
  
  $judul_buku=$_POST['judul_buku'];
  $pecah_buku = explode(" - ", $judul_buku);
  $id_buku=$pecah_buku[0];
  $judul_buku=$pecah_buku[1];

  $tanggal_peminjaman= $_POST['tanggal_peminjaman'];
  $tanggal_pengembalian= $_POST['tanggal_pengembalian'];


  $sql=$koneksi->query("select * from data_anggota where nama_anggota = '$nama_anggota'");
  while ($data=$sql->fetch_assoc()) {
    $sisa = $data['jatah_pinjam'];

    if ($sisa == 0) {
      ?>


      <script type="text/javascript">
        alert ("Jatah Pinjam Melebihi Batas, Transaksi Tidak Dapat Dilakukan, Silahkan Kembalikan buku terlebih dahulu");

        window.location.href="?page=peminjaman&aksi=tambah";

      </script>
     
      <?php

    } 

  }$sql=$koneksi->query("select * from data_buku where judul_buku = '$judul_buku'");
  while ($data=$sql->fetch_assoc()) {
    $sisa = $data['jumlah_buku'];

    if ($sisa == 0) {
      ?>


      <script type="text/javascript">
        alert ("Stok Buku HABIS, Transaksi Tidak Dapat Dilakukan, Silahkan Tambah Stok buku terlebih dahulu");

        window.location.href="?page=peminjaman&aksi=tambah";

      </script>
     
      <?php

    } else {
    $sql = $koneksi->query("INSERT INTO transaksi VALUES ('$id_peminjaman','$nama_anggota','$judul_buku', '$tanggal_peminjaman', '$tanggal_pengembalian', 'Pinjam')") or die ("Gagal Masuk".mysql_error()); 
    $sql = $koneksi->query("UPDATE data_buku SET jumlah_buku=(jumlah_buku-1) WHERE judul_buku='$judul_buku'");
    $sql = $koneksi->query("UPDATE data_anggota SET jatah_pinjam=(jatah_pinjam-1) WHERE nama_anggota='$nama_anggota'");
    ?>
    <script type="text/javascript">
      alert ("Transaksi Peminjaman Berhasil");

      window.location.href="?page=peminjaman";

      </script>
<?php 
    }  
    }
  }

?>