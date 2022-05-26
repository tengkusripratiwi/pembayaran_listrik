<?php 
	include "../koneksi.php";

	$a=$_POST['id'];
	$b=$_POST['username'];
	$c=$_POST['password'];
	$d=$_POST['nomor_kwh'];
	$e=$_POST['nama_pelanggan'];
	$f=$_POST['alamat'];
	$g=$_POST['tarif_id'];

	$select = mysqli_query($koneksi,"select id from pelanggans order by id desc");
	$data = mysqli_fetch_assoc($select);

	$a = $data['id'] + 1;


	mysqli_query($koneksi, "insert into pelanggans values('$a', '$b', '$c', '$d', '$e', '$f', '$g')");

	header("location:../pelanggan.php");
	
 ?>