    <?php
	    $message	= $_GET['message'];
	    $aksi		= "modul/proses_pengqurban.php";
    ?>
    <section class="content-header">
        <h1>
            <small>Selamat datang, <?php echo $nama_petugas; ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="?p=home"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active">Data Pengqurban</li>
        </ol>
    </section>
    <section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Data Pengqurban</h3>
				<div class="block-options pull-right">
                    <a class="btn btn-danger btn-sm" href="?p=tambah_pengqurban"><i class="fa fa-plus"></i> Tambah</a>
                </div>
                <p><font color="red"><strong><?php echo $message; ?></strong></font></p>
			</div>
			<div class="box-body table-responsive pad">
            <table id="myTable1" class="responsive display nowrap table table-bordered table-striped" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No</th>
					<th>Nama</th>
					<th>Telp/HP</th>
					<th>Alamat</th>                    
                    <th>Hewan/Berat</th>                    
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
					$i=1;
					$tp=mysqli_query($koneksi, "SELECT * FROM pengqurban ORDER BY id");
					while($r=mysqli_fetch_array($tp)){
				?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $r[nama]; ?></td>
                    <td><?php echo $r[telp]; ?></td>
					<td><?php echo $r[alamat]; ?></td>
					<td><?php echo $r[hewan].' / '.$r[berat]; ?></td>					
                    <td>
                    <?php
						echo "
							<a class='btn btn-primary btn-sm' href='?p=pengqurban_edit&id=$r[id]'><i class='fa fa-edit'></i>&nbsp;&nbsp;&nbsp;Edit</a>
							<a class='btn btn-danger btn-sm' href='$aksi?act=hapus&id=$r[id]'><i class='fa fa-trash'></i>&nbsp;&nbsp;&nbsp;Hapus</td>
						";
					?>
                    </td>
                </tr>
                <?php
					$i++;
					}
				?>
                </tbody>
            </table>
        </div>
		</div>
    </section>