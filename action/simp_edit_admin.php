<?php

	include("../koneksi.php");

	//POST
	
	$a=$_POST['id'];
	$b=$_POST['username'];
	$c=$_POST['password'];
	$d=$_POST['nama_admin'];
	//SQL edit
	$edit="update admins set 
			username = '$b',
			password= '$c',
			nama_admin='$d' where id='$a'";
	mysqli_query($koneksi,$edit) or die ("Gagal Edit data");

	//Pindah Halaman
	header("location:../admin.php");
?>
