<a href="?page=anggota&aksi=tambah" class="btn btn-success" style="margin-bottom: 5px;"><i class=" fa fa-plus"></i><b> Tambah Data</b></a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <b>Data Anggota</b>
                        </div>
                        <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama Anggota</th>
                                            <th>No Telp</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Kelas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php

                                    $no = 1;
                                    $sql = $koneksi -> query("SELECT * FROM data_anggota");
                                    while ($data = $sql->fetch_assoc()) {

                                    ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['id_anggota'];?></td>
                                            <td><?php echo $data['nama_anggota'];?></td>
                                            <td><?php echo $data['no_hp'];?></td>
                                            <td><?php echo $data['jenis_kelamin'];?></td>
                                            <td><?php echo $data['alamat'];?></td>
                                            <td><?php echo $data['status'];?></td>
                                           
                                             <td>
                                                <a href="cetaklaporan/cetakkartu.php?id=<?php echo $data['id_anggota']?>" class="btn btn-warning"><i class="fa fa-print"></i> Cetak kartu</a>
                                                <a href="?page=anggota&aksi=ubah&id=<?php echo $data['id_anggota'];?>"class="btn btn-info"><i class=" fa fa-edit"></i> Edit</a>
                                                 <a onclick="return confirm('Anda yakin ingin menghapus data ini...?')" href="?page=anggota&aksi=hapus&id=<?php echo $data['id_anggota'];?>"class="btn btn-danger"><i class=" fa fa-trash"></i> Hapus</a>

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
