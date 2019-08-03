    <section class="content-header">
        <h1>
            <small>Selamat datang, <?php echo $nama_petugas; ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="?p=home"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li><a href="?p=panitia"> Data Panitia</a></li>
            <li class="active"> Tambah Data Panitia</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header" >
                        <h3 class="box-title " style="margin-top: 5px;"> TAMBAH PANITIA</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <form method='POST' class="form-horizontal" action='modul/proses_panitia.php?act=input' enctype='multipart/form-data'>
                    <div class="box-body">
						<div class="form-group">
							<label class="col-sm-2 label-sm">Nama</label>
							<div class="col-sm-3">
								<input type="text" class="form-control " placeholder="Nama" name="nama" required >
								<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 label-sm">Telp/HP</label>
							<div class="col-sm-3">
								<input type="text" class="form-control " placeholder="Telp/HP" name="telp" required >
								<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 label-sm">Alamat</label>
							<div class="col-sm-3">
								<input type="text" class="form-control " placeholder="Alamat" name="alamat" required >
								<span class="help-block"></span>
							</div>
						</div>                                           
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <button type="submit" name="submit"  class="btn bg-navy "><i class="fa fa-check"></i> Submit</button>
                      <a  class="btn btn-danger "  href="?p=panitia" ><i class="fa fa-remove"></i> Batal</a>
                    </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>