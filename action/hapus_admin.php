<?php 
	include "../koneksi.php";

	$a=$_GET['acuan'];

	$delete="delete from admins where id='$a'";
	mysqli_query($koneksi,$delete)or die("gagal hapus data").mysqli_error();
	
	header("location:../admin.php");

 ?>