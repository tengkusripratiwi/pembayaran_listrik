<?php 
	include "../koneksi.php";

	$a=$_POST['id'];
	$b=$_POST['tagihan_id'];
	$c=$_POST['tanggal_pembayaran'];
	$d=$_POST['biaya_admin'];
	$e=$_POST['total_bayar'];
	$f=$_POST['admin_id'];

	$edit="update pembayarans set
			tagihan_id='$b',
			tanggal_pembayaran='$c',
			biaya_admin='$d',
			total_bayar='$e',
			admin_id='$f' WHERE id='$a'
			";
	mysqli_query($koneksi,$edit)or die("gagal update");
	header("location:../pembayaran.php");

 ?>