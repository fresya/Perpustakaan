<a href="?page=admin&aksi=tambah" class="btn btn-success" style="margin-bottom: 5px;"><i class=" fa fa-plus"></i><b> Tambah Data</b></a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <b>Data Admin</b>
                        </div>
                        <div class="panel-body">
                            
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama Admin</th>
                                            <th>No Telp</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
											<th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    $sql = $koneksi -> query("SELECT * FROM data_admin");
                                    while ($data = $sql ->fetch_assoc()) {

                                    ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['id_admin'];?></td>
                                            <td><?php echo $data['nama_admin'];?></td>
                                            <td><?php echo $data['no_hp'];?></td>
                                            <td><?php echo $data['jenis_kelamin'];?></td>
                                            <td><?php echo $data['alamat'];?></td>
											<td><?php echo $data['email'];?></td>
                                            <td>
                                                <a href="?page=admin&aksi=ubah&id=<?php echo $data['id_admin'];?>"class="btn btn-info"><i class=" fa fa-edit"></i> Edit</a>
                                                 <a onclick="return confirm('Anda yakin ingin menghapus data ini...?')" href="?page=admin&aksi=hapus&id=<?php echo $data['id_admin'];?>"class="btn btn-danger"><i class=" fa fa-trash"></i> Hapus</a>

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
