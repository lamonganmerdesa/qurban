<?php
    include "../koneksi.php";
    
	$timezone = "Asia/Jakarta";
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
	$date=date('Y-m-d');
	
	$id	        = $_POST['id'];
	$nama       = $_POST['nama'];
	$telp       = $_POST['telp'];
	$alamat     = $_POST['alamat'];	
		
	$p=isset($_GET['act'])?$_GET['act']:null;
    switch($p){
        default:
			break;
		case "input":
	        mysqli_query($koneksi, "INSERT INTO panitia VALUES ('', '$nama', '$telp', '$alamat')");
			header('location:../index.php?p=panitia');
	        break;
		case "hapus":
			mysqli_query($koneksi, "DELETE FROM panitia WHERE id='$_GET[id]'");
			header('location:../index.php?p=panitia');
	        break;
		case "update":
			mysqli_query($koneksi, "UPDATE panitia SET nama ='$nama', telp ='$telp', alamat = '$alamat' WHERE id='$_POST[id]'");
			header('location:../index.php?p=panitia');  
  	        break;
	}
?>