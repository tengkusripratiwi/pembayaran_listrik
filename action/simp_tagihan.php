<?php 
	include "../koneksi.php";

	$a=$_POST['id'];
	$b=$_POST['penggunaan_id'];
	$c=$_POST['tanggal'];
	$d=$_POST['jumlah_meter'];
	 print_r($_POST);

	$select = mysqli_query($koneksi,"select id from tagihans order by id desc");
	$data = mysqli_fetch_assoc($select);

	$a = $data['id'] + 1;


	mysqli_query($koneksi, "insert into tagihans values('$a', '$b', '$c','$d')");

	header("location:../tagihan.php");
	
 ?>