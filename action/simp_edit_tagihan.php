<?php 
	include "../koneksi.php";

	$a=$_POST['id'];
	$b=$_POST['penggunaan_id'];
	$c=$_POST['tanggal'];
	$d=$_POST['jumlah_meter'];

	$edit="update tagihans set 
			penggunaan_id='$b',
			tanggal='$c',
			jumlah_meter='$d' where id=$a";
	mysqli_query($koneksi,$edit) or die("gagal update");
	header("location:../tagihan.php");


 ?>