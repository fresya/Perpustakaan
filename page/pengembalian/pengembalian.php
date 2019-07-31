<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <b>Transaksi Pengembalian</b>
                        </div>
                        <div class="panel-body">
                            
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Transaksi</th>
                                            <th>Nama Anggota</th>
                                            <th>Judul Buku</th>
                                            <th>Tanggal Peminjaman</th>
                                            <th>Tanggal Pengembalian</th>
                                            <th>Terlambat / Denda</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    $sql = $koneksi -> query("select * from transaksi where status='Pinjam'");
                                    while ($data = $sql->fetch_assoc()) {

                                    ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['id_peminjaman'];?></td>
                                            <td><?php echo $data['nama_anggota'];?></td>
                                            <td><?php echo $data['judul_buku'];?></td>
                                            <td><?php echo $data['tanggal_peminjaman'];?></td>
                                            <td><?php echo $data['tanggal_pengembalian'];?></td>
                                            <td>

                                            <?php
                                            $denda = 1000;
                                            $tanggal_dateline = $data['tanggal_pengembalian'];
                                            $tanggal_pengembalian = date('d-m-Y');
                                            $lambat = terlambat($tanggal_dateline, $tanggal_pengembalian);
                                            $denda1 = $lambat * $denda;

                                            if ($lambat > 0){
                                            echo "
                                                <font color='Red'>$lambat Hari<br>(Rp $denda1)</font>";
                                            }else{
                                            echo $lambat ."Hari";
                                            }
                                            ?>
                                           
                                                 
                                            </td>
                                            <td><?php echo $data['status'];?></td>
                                            <td>
                                                  <a onclick="return confirm('Yakin melanjutkan proses pengembalian...? (Pastian anggota sudah membayar denda apabila anggota memilikinya)')"<a href="?page=pengembalian&aksi=kembali&id_peminjaman=<?php echo $data['id_peminjaman'];?>&judul_buku=<?php echo $data['judul_buku'];?>&nama_anggota=<?php echo $data['nama_anggota'] ?>"class="btn btn-info">Kembali</a>
                                                  <a href="?page=pengembalian&aksi=perpanjang&id_peminjaman=<?php echo $data['id_peminjaman'];?>&judul_buku=<?php echo $data['judul_buku']?>&lambat=<?php echo $lambat?> $tanggal_pengembalian=<?php echo $data['tanggal_pengembalian']?>"class="btn btn-danger">Perpanjang</a>

                                            </td>

                                        </tr>
                                        <?php  } 

                                        ?> 
                                    </tbody>
                                    
                                    </div>
                              </div>
                        </div>
                    </div>
            </div>
