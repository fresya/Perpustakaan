<a href = "./cetaklaporan/cetakanggota.php" target="blank" class="btn btn-success" style="margin-top: 8px"><i class=" fa fa-print"></i><b> Cetak Laporan</b></a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                  
                             <h2 align="center"><b>Laporan Data Anggota</b></h2><br>
                        </div>
                        <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr align="center">
                                            <th>No</th>
                                            <th>ID Anggota</th>
                                            <th>Nama</th>
                                            <th>No Telp</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Kelas</th>
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

                                        </tr>
                                        <?php  } 

                                        ?> 
                                    </tbody>
                                    
                                    </div>
                              </div>
                        </div>
                    </div>
            </div>
