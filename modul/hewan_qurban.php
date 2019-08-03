    <?php
	    $aksi		= "modul/proses_jenis.php";
    ?>
    <section class="content-header">
        <h1>
            <small>Selamat datang, <?php echo $nama_petugas; ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="?p=home"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active">Data Jenis Hewan Qurban</li>
        </ol>
    </section>
    <section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Data Jenis Hewan Qurban</h3>
				<div class="block-options pull-right">
				    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> Tambah Jenis Hewan Qurban</button>
                </div>
			</div>
			<div class="box-body table-responsive pad">
            <table id="myTable1" class="responsive display nowrap table table-bordered table-striped" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Hewan</th>
                    <th>Aktif</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
					$i=1;
					$tp=mysqli_query($koneksi, "SELECT * FROM jenis_hewan ORDER BY id ");
					while($r=mysqli_fetch_array($tp)){
					    $jenis   = $r['jenis'];	
						$status   = $r['status'];	
				?>
                <tr>
                    <th><?php echo $i; ?></th>
                    <th><?php echo $jenis; ?></th>
                    <th><?php echo $status; ?></th>
                    <th>
                        <?php
							echo "
								<a class='btn btn-primary btn-sm' href='?p=jenishewan_edit&id=$r[id]'><i class='fa fa-edit'></i>&nbsp;&nbsp;&nbsp;Edit</a>
								<a class='btn btn-danger btn-sm' href='$aksi?act=hapus&id=$r[id]'><i class='fa fa-trash'></i>&nbsp;&nbsp;&nbsp;Hapus</td>
							";
						?>
                    </th>
                </tr>
                <?php 
                    $i=$i+1;
                    } 
                ?>
                </tbody>
            </table>
        </div>
		</div>
    </section>
    <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Jenis Hewan Qurban</h4>
            </div>
            <div class="modal-body">
            <form method='POST' class="form-horizontal" action='modul/proses_jenis.php?act=input' enctype='multipart/form-data'>
				<div class="box-body">
					<div class="form-group">
						<label class="col-sm-3 control-label">Hewan</label>
						<div class="col-sm-9">
							<input class="form-control" name="jenis" type="text" required="" placeholder="Jenis Hewan Qurban">
						</div>
					</div>						
					<div class="form-group">
						<label class="col-sm-3 control-label">Aktif</label>
						<div class="col-sm-9">
							<select class="form-control" name="status">
							    <option value=''>- Pilih -</option>
							    <option value='Y'>Y</option>
							    <option value='N'>N</option>
							</select>
						</div>
					</div>
				</div>			
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>			
            </div>            
        </div>
	</div>
</div>