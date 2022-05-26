<?php

	include("../koneksi.php");

	//POST
	
	$a=$_POST['id'];
	$b=$_POST['daya_tarifperkwh'];
	//SQL edit
	$edit="update tarifs set 
			daya_tarifperkwh = '$b' where id='$a'";
	mysqli_query($koneksi,$edit) or die ("Gagal Edit data");

	//Pindah Halaman
	header("location:../tarif.php");
?>
