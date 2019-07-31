<a href="?page=buku&aksi=tambah" class="btn btn-success" style="margin-bottom: 5px;"><i class=" fa fa-plus"></i><b> Tambah Data</b></a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <b>Data Buku</b>
                        </div>
                        <div class="panel-body">
                            
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                            <th>Aksi</th>

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
                                             <td>
                                                <a href="?page=buku&aksi=ubah&id=<?php echo $data['id_buku'];?>"class="btn btn-info"><i class=" fa fa-edit"></i> Edit</a>
                                                 <a onclick="return confirm('Anda yakin ingin menghapus data ini...?')" href="?page=buku&aksi=hapus&id=<?php echo $data['id_buku'];?>"class="btn btn-danger"><i class=" fa fa-trash"></i> Hapus</a>

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
