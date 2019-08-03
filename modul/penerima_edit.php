    <?php
	    $edit = mysqli_query($koneksi, "SELECT * FROM penerima WHERE id='$_GET[id]'");
        $r    = mysqli_fetch_array($edit);
    ?>
    <section class="content-header">
        <h1>
            <small>Selamat datang, <?php echo $nama_petugas; ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="?p=home"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li><a href="?p=penerima"> Data Penerima Qurban</a></li>
            <li class="active"> Update Data Penerima Qurban</li>
        </ol>
    </section>
    <section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">UPDATE DATA PENERIMA QURBAN</h3>
			</div>
			<div class="box-body">
                <form method='POST' class="form-horizontal" action='modul/proses_penerima.php?act=update' enctype='multipart/form-data'>
                    <div class="box-body">
                        <div class="form-group">
							<label class="col-sm-2 label-sm">Nama</label>
							<div class="col-sm-3">
								<input type="text" class="form-control " value='<?php echo $r[nama]; ?>' name="nama" required >
								<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 label-sm">Alamat</label>
							<div class="col-sm-3">
								<input type="text" class="form-control " value='<?php echo $r[alamat]; ?>' name="alamat" required >
								<span class="help-block"></span>
							</div>
						</div>                        
                    </div>
                    <div class="box-footer">
                        <input type='hidden' name='id' value='<?php echo $r[id]; ?>'>
                        <button type="submit"  name="submit" class="btn bg-navy "><i class="fa fa-check"></i> Submit</button>
                        <a  class="btn btn-danger" href="?p=penerima" ><i class="fa fa-remove"></i> Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </section>