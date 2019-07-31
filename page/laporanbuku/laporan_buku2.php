<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                   
                             <h2 align="center"><b>Koleksi Buku Perpustakaan</b></h2><hr>
                        </div>
                        <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                         <tr>
                                            <th>No</th>
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
