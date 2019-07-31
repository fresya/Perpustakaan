<?php

session_start();
include "function.php";

$koneksi = new mysqli ("localhost","root","","perpustakaan");

 if ($_SESSION['admin'] || $_SESSION['user']) {

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PERPUSTAKAAN POLITEKNIK NEGERI MEDAN</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Perpustakaan</a>  
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">         
    <div align="text-center">
        <span><?php
      $array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
      $hr = $array_hr[date('N')];
      $tgl= date('j');
      $array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
      $bln = $array_bln[date('n')];
      $thn = date('Y');
      echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " ";
      ?>
        </span>
        
&nbsp; 

<a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                   
                    <h4><i><b>Hello, Admin!</b></i></h4>
					</li>
							
                     <li>
                        <a  href="index.php"><i class="fa fa-home fa-3x"></i></i>Beranda</a>
                    </li>

                    <li>
                        <a  href="?page=admin"><i class="fa fa-users fa-3x"></i>Kelola Data Admin</a>
                    </li>

					<li >
                        <a   href="?page=anggota"><i class="fa fa-users fa-3x"></i>Kelola Data Anggota</a>
                    </li>

                    <li>
                        <a  href="?page=buku"><i class="fa fa-book fa-3x"></i>Kelola Data Buku</a>
                    </li>
					                   
                   <li>
                        <a href="#"><i class="fa fa-edit fa-3x"></i> Transaksi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?page=peminjaman">Peminjaman</a>
                            </li>
                            <li>
                                <a href="?page=pengembalian">Pengembalian</a>
                            </li>
                        </ul>  
                    </li>  

                    <li>
                        <a href="#"><i class="fa fa-file fa-3x"></i> Laporan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?page=laporanadmin">Laporan Data Admin</a>
                            </li>
                            <li>
                                <a href="?page=laporananggota">Laporan Data Anggota</a>
                            </li>
                            <li>
                                <a href="?page=laporanbuku">Laporan Data Buku</a>
                            </li>
                             <li>
                                <a href="?page=laporantransaksi">Laporan Transaksi</a>
                            </li>
                        </ul>  
                    </li>  
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    
                    <?php
                    error_reporting(1);
                    $page = $_GET['page'];
                    $aksi = $_GET['aksi'];

                    if ($page == "admin"){
                    	if ($aksi == ""){
                    		Include "page/admin/admin.php";
                    	}elseif ($aksi== "tambah") {
                           Include "page/admin/tambah.php";
                      }elseif ($aksi== "ubah") {
                           Include "page/admin/ubah.php";
                      }elseif ($aksi== "hapus") {
                           Include "page/admin/hapus.php";
                      }
                    }elseif ($page== "anggota"){
                      if ($aksi== ""){
                        Include "page/anggota/anggota.php";
                      }elseif ($aksi== "tambah"){
                        Include "page/anggota/tambah.php";
                      }elseif ($aksi== "ubah"){
                        Include "page/anggota/ubah.php";
                      }elseif ($aksi== "hapus") {
                           Include "page/anggota/hapus.php";
                       }elseif ($aksi== "cetakkartu") {
                           Include "page/anggota/cetakkartu.php";
                      }
                    }elseif ($page == "buku") {
                    	if ($aksi == "") {
                    		Include "page/buku/buku.php";
                    }elseif ($aksi == "tambah") {
							           Include "page/buku/tambah.php";
                      }elseif ($aksi== "ubah"){
                        Include "page/buku/ubah.php";
                      }elseif ($aksi== "hapus") {
                           Include "page/buku/hapus.php";
                      }
                    }elseif ($page == "peminjaman") {
                      if ($aksi == ""){
                      Include "page/peminjaman/peminjaman.php";
                    }elseif ($aksi == "tambah") {
                      include "page/peminjaman/tambah.php";
                    }

                    }elseif ($page == "pengembalian") {
                      if ($aksi == ""){
                      Include "page/pengembalian/pengembalian.php";
                    }elseif ($aksi == "kembali") {
                      include "page/pengembalian/kembali.php";
                    }elseif ($aksi == "perpanjang") {
                      include "page/pengembalian/perpanjang.php";
                    }
                  }elseif ($page == "laporanadmin") {
                      if ($aksi == "") {
                        Include "page/laporanadmin/laporan_admin.php";
                      }
                    }elseif ($page == "laporananggota") {
                      if ($aksi == "") {
                        include "page/laporananggota/laporan_anggota.php";
                      }
                    }elseif ($page == "laporanbuku") {
                      if ($aksi == "") {
                        include "page/laporanbuku/laporan_buku.php";
                      }
                    }
                    elseif ($page == "laporantransaksi") {
                      if ($aksi == "") {
                        include "page/laporantransaksi/laporan_transaksi.php";
                       }
                    }
                    elseif ($page == ""){
                      include "home.php";
                    }

                    
                

                    
                    

                   
                  
                    ?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->

     <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <!-- <script src="assets/js/custom.js"></script> -->
    
    
   
</body>
</html>
<?php 

}else
{
  header("location:login.php");
}

 ?>