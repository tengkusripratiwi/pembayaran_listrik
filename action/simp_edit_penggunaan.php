<?php 
	include "../koneksi.php";

	$a=$_POST['id'];
	$b=$_POST['pelanggan_id'];
	$c=$_POST['tanggal'];
	$d=$_POST['meter_awal'];
	$e=$_POST['meter_akhir'];

	$edit="update penggunaans set 
			pelanggan_id = '$b',
			tanggal = '$c',
			meter_awal = '$d',
			meter_akhir= '$e' where id= '$a'";
			echo $edit;
	mysqli_query($koneksi, $edit) or die('gagal edit');

	header("location:../penggunaan.php");


 ?>