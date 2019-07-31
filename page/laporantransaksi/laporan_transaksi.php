<a href = "./cetaklaporan/cetaktransaksi.php" target="blank" class="btn btn-success" style="margin-top: 8px"><i class=" fa fa-print"></i><b> Cetak Laporan</b></a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                  
                             <h2 align="center"><b>Laporan Peminjaman & Pengambalian</b></h2><br>
                        </div>
                        <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Peminjaman</th>
                                            <th>Nama Anggota</th>
                                            <th>Judul Buku</th>
                                            <th>Tanggal Peminjaman</th>
                                            <th>Tanggal Pengembalian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    $sql = $koneksi -> query("SELECT * FROM transaksi WHERE status = 'Kembali'");
                                    while ($data = $sql->fetch_assoc()) {

                                    ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['id_peminjaman'];?></td>
                                            <td><?php echo $data['nama_anggota'];?></td>
                                            <td><?php echo $data['judul_buku'];?></td>
                                            <td><?php echo $data['tanggal_peminjaman'];?></td>
                                            <td><?php echo $data['tanggal_pengembalian'];?></td>
                                           

                                        </tr>
                                        <?php  } 

                                        ?> 
                                    </tbody>
                                    
                                    </div>
                              </div>
                        </div>
                    </div>
            </div>
