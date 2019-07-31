<?php
error_reporting(1);

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
    <title>Perpustakaan SMA Negeri 10 Pekanbaru</title>
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
                <a class="navbar-brand" href="indexuser.php">Perpustakaan</a> 
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
                    
                    <h4><i><b>Hello, <?php echo $_SESSION['user'] ?>!</b></i></h4>
					</li>
							
                     <li>
                        <a  href="indexuser.php"><i class="fa fa-home fa-3x"></i></i> Beranda</a>
                    </li>

                    <li>
                        <a  href="?page=riwayat&nama=<?php echo $_SESSION['user'] ?>"><i class="fa fa-book fa-3x"></i> Riwayat</a>
                    </li>

                    <li>
                        <a  href="?page=laporanbuku"><i class="fa fa-book fa-3x"></i> Data Buku</a>
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

   
                    if ($page == "laporanbuku") {
                    	if ($aksi == "") {
                    		Include "page/laporanbuku/laporan_buku2.php";
                    }

                  }elseif ($page == "riwayat") {
                    if ($aksi == "") {
                      Include "page/riwayat/riwayat.php";
                    }
                    
                  }
                    elseif ($page == ""){
                      include "homeuser.php";
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
    <script src="assets/js/custom.js"></script>
    
    
   
</body>
</html>
<?php 

}else{
  header("location:login.php");
}

 ?>