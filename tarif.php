
<!DOCTYPE html>
<html>
<head>
	<?php include('head_ref.php') ?>
	<?php include ('css.php') ?>

</head>
<body>
	<?php include ('nav.php') ?>
	<?php include('header.php') ?>

	<h1 style="text-align: center;">Tabel Tarif</h1>
	<!-- tambah pelanggan  -->
	
		<a class='btn btn-success' href="tambah_tarif.php">Tambah</a>
	

	<!-- cari pelanggan -->
	<form action="tarif.php" method="post" style="float: right;">
		<input type="text" placeholder="cari daya" name="search">
		<button class='btn btn-primary mb-2' type="submit">cari</button>
	</form>

	<!-- data pelanggan -->
	<table cellpadding="1" cellspacing="0" border="1" width="100%" class="table table-striped table bordered">
		<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Daya Tarif PerKwh</th>
			<th>Hapus/Edit</th>
		</tr>
		</thead>
		<?php 
			include 'koneksi.php';
			$query=	"select * from tarifs";
			if(isset($_POST['search'])){
				$query= "select * from tarifs WHERE tarifs.daya_tarifperkwh LIKE '%$_POST[search]%'";
			}

			$no=1;
			$data=mysqli_query($koneksi, $query);
			while($d=mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>			
				<td><?php echo $d['daya_tarifperkwh'] ?></td>
				<td>
					<a class='btn btn-warning' href="edit_tarif.php?id=<?php echo $d['id']; ?>">Edit</a>
					<a class='btn btn-danger' href="action/hapus_tarif.php?acuan=<?php echo $d['id']; ?>">Hapus</a>
				</td>
			</tr>
			<?php
			}
		 ?>

	</table>
<?php include('footer.php') ?>
<?php include('js.php') ?>
</body>
</html>