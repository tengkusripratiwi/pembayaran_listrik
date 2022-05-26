<?php 
	include "../koneksi.php";

	$a=$_POST['id'];
	$b=$_POST['pelanggan_id'];
	$c=$_POST['tanggal'];
	$d=$_POST['meter_awal'];
	$e=$_POST['meter_akhir'];

	$select = mysqli_query($koneksi,"select id from penggunaans order by id desc");
	$data = mysqli_fetch_assoc($select);

	$a = $data['id'] + 1;


	mysqli_query($koneksi, "insert into penggunaans values('$a', '$b', '$c', '$d', '$e')");

	header("location:../penggunaan.php");
	
 ?>