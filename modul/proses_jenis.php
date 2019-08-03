<?php
	include "../koneksi.php";
	
	$id     = $_POST['id'];
	$jenis  = $_POST['jenis'];
	$status = $_POST['status'];	
	
	$p=isset($_GET['act'])?$_GET['act']:null;
    switch($p){
        default:
			break;
        case "input":						
			mysqli_query($koneksi, "INSERT INTO jenis_hewan VALUES ('', '$jenis', '$status')");
			header('location:../index.php?p=hewan_qurban');
	        break;
        case "hapus":
			mysqli_query($koneksi, "DELETE FROM jenis_hewan WHERE id='$_GET[id]'");
			header('location:../index.php?p=hewan_qurban');
	        break;
        case "update":
			mysqli_query($koneksi, "UPDATE jenis_hewan SET jenis='$_POST[jenis]', status='$_POST[status]' WHERE id='$_POST[id]'");
			header('location:../index.php?p=hewan_qurban');  
	}
?>   