<?php
  error_reporting(1);

  ob_start();
  session_start();

  $koneksi = new mysqli ("localhost","root","","perpustakaan");

   if($_SESSION['admin'] || $_SESSION['user']) {

    header("location:index.php");

  }else{

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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
            <form action="login.php" method="POST">
                <br/><br/>
                <br><br><br><br>
               
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                        <h2 style="font-size:20px" align="center"><strong>PERPUSTAKAAN POLITEKNIK NEGERI MEDAN </strong></h2> 
                        <h4 align ="center"><strong><font color="seagreen">Silahkan Login </font></strong></h4>
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST"><br>
                                  
                                     <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="username" placeholder="Username"  required="" />
                                      
                                        <br>
                                      <div class="form-group">
                                            <label>Password</label>
                                            <input type = "password"class="form-control" name="password" placeholder="Password"  required="" />
                                        <br>

                                    
                                 
                                     <div align="center"><input type="Submit" name="Login" value="Login" class="btn btn-success">

                                      <div align="center">
                                        
 
              <br><br><b>Belum Daftar? <a href="daftar.php">Klik Disini</a></p>
            </div>
                                  
                                   
                                    </form>
                            </div>
                           
                        </div>
                        </from>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>

<?php 

  if (isset($_POST['Login'])) {
   
   $username = $_POST['username'];
   $password = hash("sha1",$_POST['password']);
   

   $sql = $koneksi->query("SELECT * from tb_users where username='$username' and password='$password'");

   $data = $sql->fetch_assoc();

   $ketemu = $sql->num_rows;

   if ($ketemu >= 1) {

     session_start();

      if ($data['level'] == "admin") {

        $_SESSION['admin'] = $data['level'];

        header("location:index.php");


      }else if($data['level'] == "user") {

        $_SESSION['user'] = $data['nama'];

        header("location:indexuser.php");
      }
   }else{

    ?>

      <script type="text/javascript">
        alert ("Login Gagal Username dan Password Anda SALAH.... Silahkan Ulangi Lagi");
      </script>

    <?php
   }

  }

  }
?>