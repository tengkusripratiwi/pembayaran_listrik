<?php 
	include "../koneksi.php";

	$a=$_GET['acuan'];

	$delete="delete from penggunaans where id='$a'";
	mysqli_query($koneksi, $delete)or die("gagal hps").mysqli_error();

	header("location:../penggunaan.php");
 ?>