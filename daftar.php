<?php
error_reporting(1);

  $koneksi = new mysqli ("localhost","root","","perpustakaan");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran Anggota</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /></head>
<body>
  <body background="./buku5.jpg">
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
          
                <br/><br/>
                
               
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                        <h2 align="center"><strong>Buat Akun Baru</strong></h2> 
                        <h4 align ="center"><strong><font color="seagreen">Silahkan Isi Data Diri Anda! </font></strong></h4>
                          </div>
                            <div class="panel-body">
                                <form role="form" method="POST"><br>
                                  

                                         <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" name="nama" placeholder="Nama Lengkap"  required="" />
                                        </div>
                                       
                                       <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="username" placeholder="Username"  required="" />
                                      
                                        <br>
                                      <div class="form-group">
                                            <label>Password</label>
                                            <input type = "password"class="form-control" name="password" placeholder="Password"  required="" />
                                        <br>

                                            <div class="form-group">
                                            <label>Ulangi Password</label>
                                            <input type = "password" class="form-control" placeholder="Silahkan Ulangi"  required="" />
                                      

                                        <br>
                                     
                                 

                                           <div align="center"> <input type="Submit" name="simpan" value="Daftar" class="btn btn-success"></div>

                                            <div align="center">
                                          <br><br><b>Sudah Punya Akun? <a href="login.php">Klik Disini</a></p>
                                        </div>
                                    </div>

                            </form>
                         </div>
</div>
</div>
</div>

<?php

$id_users          = $_POST ['id_users'];
$nama              = $_POST ['nama'];
$username          = $_POST ['username'];
$password          = hash("sha1",$_POST['password']);
$level             = $_POST ['level'];

$simpan            = $_POST ['simpan'];

if ($simpan) {
    
    $sql = $koneksi -> query("insert into tb_users (id_users, nama, username, password, level) values ('$id_users','$nama','$username','$password','user')");

        if ($sql) {
            ?>
            <script type="text/javascript">
                
            alert ("Selamat, Anda Berhasil Terdaftar!");
            window.location.href="login.php";

            </script>
        <?php

        }
    }
?>