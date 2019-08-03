<?php
    $pengqurban     	= mysqli_query($koneksi, "SELECT * FROM pengqurban");
    $jumlahpengqurban	= mysqli_num_rows($pengqurban);
    
    $penerima      = mysqli_query($koneksi, "SELECT * FROM penerima");
    $jmlpenerima   = mysqli_num_rows($penerima);
    
    $hewan      = mysqli_query($koneksi, "SELECT * FROM jenis_hewan");
    $jmlhewan   = mysqli_num_rows($hewan);
    
    $panitia      = mysqli_query($koneksi, "SELECT * FROM panitia");
    $jmlpanitia   = mysqli_num_rows($panitia);    
?>
<section class="content-header">
    <h1>
        <small>Selamat datang, <?php echo $hasil['nama_petugas']; ?></small>
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Beranda</a></li>
    </ol>
</section>
<section class="content">
	<div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo $jumlahpengqurban; ?></h3>
                    <p>Data PengQurban</p>
                </div>
                <div class="icon">
                    <i class="fa fa-file-o"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?php echo $jmlpenerima; ?></h3>
                    <p>Data Penerima Qurban</p>
                </div>
                <div class="icon">
                    <i class="fa fa-file-o"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?php echo $jmlpanitia; ?></h3>
                    <p>Data Panitia</p>
                </div>
                <div class="icon">
                    <i class="fa fa-file-o"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo $jmlhewan; ?></h3>
                    <p>Data Hewan Qurban</p>
                </div>
                <div class="icon">
                    <i class="fa fa-file-o"></i>
                </div>
            </div>
        </div>        
    </div>
</section>