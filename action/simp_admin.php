<?php 
	include "../koneksi.php";

	$a=$_POST['id'];
	$b=$_POST['username'];
	$c=$_POST['password'];
	$d=$_POST['nama_admin'];

	$select = mysqli_query($koneksi,"select id from admins order by id desc");
	$data = mysqli_fetch_assoc($select);

	$a = $data['id'] + 1;

	mysqli_query($koneksi, "insert into admins values('$a', '$b', '$c', '$d')");

	header("location:../admin.php");
	
 ?>