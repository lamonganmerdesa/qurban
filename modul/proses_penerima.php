<?php
    include "../koneksi.php";
    
	$timezone = "Asia/Jakarta";
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
	$date=date('Y-m-d');
	
	$id	        = $_POST['id'];
	$nama       = $_POST['nama'];
	$alamat     = $_POST['alamat'];	
		
	$p=isset($_GET['act'])?$_GET['act']:null;
    switch($p){
        default:
			break;
		case "input":
	        mysqli_query($koneksi, "INSERT INTO penerima VALUES ('', '$nama', '$alamat')");
			header('location:../index.php?p=penerima');
	        break;
		case "hapus":
			mysqli_query($koneksi, "DELETE FROM penerima WHERE id='$_GET[id]'");
			header('location:../index.php?p=penerima');
	        break;
		case "update":
			mysqli_query($koneksi, "UPDATE penerima SET nama ='$nama', alamat = '$alamat' WHERE id='$_POST[id]'");
			header('location:../index.php?p=penerima');  
  	        break;
	}
?>