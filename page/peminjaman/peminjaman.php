
<a href="?page=peminjaman&aksi=tambah" class="btn btn-success" style="margin-bottom: 5px;"><i class=" fa fa-plus"></i><b> Tambah Peminjaman</b></a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <b>Transaksi Peminjaman</b>
                        </div>
                        <div class="panel-body">
                            
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Transaksi</th>
                                            <th>Nama Anggota</th>
                                            <th>Judul Buku</th>
                                            <th>    Tanggal Peminjaman</th>
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
                                        </tr>
                                        <?php  } 

                                        ?> 
                                    </tbody>
                                    
                                    </div>
                              </div>
                        </div>
                    </div>
            </div>
