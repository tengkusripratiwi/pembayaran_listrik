<?php 
	include "../koneksi.php";

	
	$b=$_POST['daya_tarifperkwh'];

	$select = mysqli_query($koneksi,"select id from tarifs order by id desc");
	$data = mysqli_fetch_assoc($select);

	$a = $data['id'] + 1;

	mysqli_query($koneksi, "insert into tarifs values('$a','$b')");

	header("location:../tarif.php");
 ?>