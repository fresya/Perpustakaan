<a href = "./cetaklaporan/cetakbuku.php" target="blank" class="btn btn-success" style="margin-top: 8px"><i class=" fa fa-print"></i><b> Cetak Laporan</b></a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                  
                             <h2 align="center"><b>Laporan Data Buku</b></h2><br>
                        </div>
                        <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                         <tr>
                                            <th>No</th>
                                            <th>ID Buku</th>
                                            <th>Judul Buku</th>
                                            <th>Tahun Terbit</th>
                                            <th>Kota Terbit</th>
                                            <th>Penerbit</th>
                                            <th>Pengarang</th>
                                            <th>Kategori</th>
											<th>Lokasi</th>
                                            <th>ISBN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    $sql = $koneksi -> query("SELECT * FROM data_buku");
                                    while ($data = $sql->fetch_assoc()) {

                                    ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['id_buku'];?></td>
                                            <td><?php echo $data['judul_buku'];?></td>
                                            <td><?php echo $data['tahun_terbit'];?></td>
                                            <td><?php echo $data['kota_terbit'];?></td>
                                            <td><?php echo $data['penerbit'];?></td>
                                            <td><?php echo $data['pengarang'];?></td>
                                            <td><?php echo $data['kategori'];?></td>
											<td><?php echo $data['lokasi_buku'];?></td>
                                            <td><?php echo $data['isbn'];?></td>

                                        </tr>
                                        <?php  } 

                                        ?> 
                                    </tbody>
                                    
                                    </div>
                              </div>
                        </div>
                    </div>
            </div>
