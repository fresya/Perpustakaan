<marquee><h4><i><b>Selamat Datang, <?php echo $_SESSION['user'] ?> di tampilan awal Politeknik Negeri Medan </b></i></h4>
</marquee>

            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12"> 
                        <h2 align="center"><b><strong>PERPUSTAKAAN POLITEKNIK NEGERI MEDAN</strong></h2>   
                     <hr>
                  </div>
                </div>              
               <center><img src="buku3.png" width="950" height="550"></center><br><br>
               <h3><b><i>Fitur yang tersedia :</i></b></h3>
                <hr />
                <div class="row">

               <div class="col-md-12 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-file"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">   <a  href="?page=riwayat&nama=<?php echo $_SESSION['user'] ?>">Riwayat Peminjaman & Pengembalian</a></p>
                    <p class="text-muted">Daftar Buku Pinjaman, Tanggal Pinjaman beserta Denda</p>
                </div>
             </div>
             </div>

               <div class="col-md-12 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-book"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><a href="?page=laporanbuku">Koleksi Buku</a></p>
                    <p class="text-muted">Kumpulan Data Koleksi Buku Perpustakaan</p>
                </div>
             </div>
             </div>
  