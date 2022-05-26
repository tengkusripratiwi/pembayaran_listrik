<?php 
	include "../koneksi.php";

	$a=$_POST['id'];
	$b=$_POST['tagihan_id'];
	$c=$_POST['tanggal_pembayaran'];
	$d=$_POST['biaya_admin'];
	$e=$_POST['total_bayar'];
	$f=$_POST['admin_id'];

	$select = mysqli_query($koneksi,"select id from pembayarans order by id desc");
		

	$data = mysqli_fetch_assoc($select);

	$a = $data['id'] + 1;


	mysqli_query($koneksi, "insert into pembayarans values('$a', '$b', '$c', '$d', '$e', '$f')");

	header("location:../pembayaran.php");
	
 ?>