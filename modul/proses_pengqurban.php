<?php
    include "../koneksi.php";
    
	$timezone = "Asia/Jakarta";
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
	$date=date('Y-m-d');
	
	$id	        = $_POST['id'];
	$nama       = $_POST['nama'];
	$telp       = $_POST['telp'];
	$alamat     = $_POST['alamat'];
	$hewan      = $_POST['hewan'];
	$berat      = $_POST['berat'];
		
	$p=isset($_GET['act'])?$_GET['act']:null;
    switch($p){
        default:
			break;
		case "input":
	        mysqli_query($koneksi, "INSERT INTO pengqurban VALUES ('', '$nama', '$telp', '$alamat', '$hewan', '$berat')");
			header('location:../index.php?p=pengqurban');
	        break;
		case "hapus":
			mysqli_query($koneksi, "DELETE FROM pengqurban WHERE id='$_GET[id]'");
			header('location:../index.php?p=pengqurban');
	        break;
		case "update":
			mysqli_query($koneksi, "UPDATE pengqurban SET nama ='$nama', 
			telp = '$telp', alamat = '$alamat', hewan = '$hewan', 
			berat = '$berat' WHERE id='$_POST[id]'");
			header('location:../index.php?p=pengqurban');  
  	        break;
	}
?>