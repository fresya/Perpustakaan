<?php
$nama_anggota = $_GET['nama'];
$sql = $koneksi -> query("SELECT * from transaksi where nama_anggota='$nama_anggota' order by status='Kembali'");
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                       <h2 align="center"><b>Riwayat Peminjaman & Pengembalian</b></h2><hr>
                        </div>
                        <div class="panel-body">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Judul Buku</th>
                                            <th>Tanggal Peminjaman</th>
                                            <th>Tanggal Pengembalian</th>
                                            <th>Terlambat</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1;

                                    while ($data = $sql->fetch_assoc()) {

                                    ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['nama_anggota'];?></td>
                                            <td><?php echo $data['judul_buku'];?></td>
                                            <td><?php echo $data['tanggal_peminjaman'];?></td>
                                            <td><?php echo $data['tanggal_pengembalian'];?></td>
                                            <td>
                                            
                                            <?php 
                                            $denda = 1000;

                                            $tanggal_dateline = $data['tanggal_pengembalian'];
                                            $tanggal_pengembalian = date('Y-m-d');

                                            $lambat = terlambat($tanggal_dateline, $tanggal_pengembalian);
                                            $denda1 = $lambat * $denda;

                                            if ($lambat>0) {
                                                 echo "

                                                        <font color='maroon'>$lambat hari<br>(Rp $denda1)</font>

                                                    ";
                                             }else{
                                                echo $lambat ."Hari";
                                             }

                                            ?>
                                                 
                                            </td>
                                            <td><?php echo $data['status'];?></td>
                                            

                                        </tr>
                                        <?php  } 

                                        ?> 
                                    </tbody>
                                    
                                    </div>
                              </div>
                        </div>
                    </div>
            </div>
