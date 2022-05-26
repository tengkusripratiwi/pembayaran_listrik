<?php

	include("../koneksi.php");

	//POST
	
	$a=$_POST['id'];
	$b=$_POST['username'];
	$c=$_POST['password'];
	$d=$_POST['nomor_kwh'];
	$e=$_POST['nama_pelanggan'];
	$f=$_POST['alamat'];
	$g=$_POST['tarif_id'];
	//SQL edit
	$edit="update pelanggans set 
			username = '$b',
			password = '$c',
			nomor_kwh = '$d',
			nama_pelanggan = '$e',
			alamat = '$f',
			tarif_id = '$g' where id='$a'";
	mysqli_query($koneksi,$edit) or die ("Gagal Edit data");

	//Pindah Halaman
	header("location:../pelanggan.php");
?>