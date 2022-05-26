<!DOCTYPE html>
<html>
<head>
	<?php include('head_ref.php') ?>
	<?php include('css.php'); ?>
</head>
<body>
	<?php include('nav.php'); ?>
	<?php include('header.php') ?>

	<h1 style="text-align: center;">Tabel Penggunaan</h1>
	<!-- tambah pelanggan  -->
	
		<a class="btn btn-success" href="tambah_penggunaan.php">Tambah</a>
	

	<!-- cari pelanggan -->
	<form action="penggunaan.php" method="post" style="float: right;">
		<input type="text" placeholder="cari nama pelanggan" name="search">
		<button class="btn btn-primary mb-2" type="submit">cari</button>
	</form>

	<!-- data pelanggan -->
	<table cellpadding="1" cellspacing="0" border="1" width="100%" class="table table-striped table-bordered">
		<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>Nama Pelanggan</th>		
			<th>Tanggal</th>
			<th>Meter Awal</th>
			<th>Meter Akhir</th>
			<th>Hapus/Edit</th>
		</tr>
		</thead>
		<?php 
			include 'koneksi.php';
			$query= "select *, pelanggans.id id_pelanggan, penggunaans.id id_penggunaan from penggunaans INNER JOIN pelanggans ON penggunaans.pelanggan_id=pelanggans.id";
			if(isset($_POST['search'])){
				$query = "select *, pelanggans.id id_pelanggan, penggunaans.id id_penggunaan from penggunaans INNER JOIN pelanggans ON penggunaans.pelanggan_id=pelanggans.id WHERE pelanggans.nama_pelanggan LIKE '%$_POST[search]%'";
			}

			$no=1;
			$data=mysqli_query($koneksi, $query);
			while($d=mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_penggunaan'] ?></td>
				<td><?php echo $d['nama_pelanggan'] ?></td>
				<td><?php echo $d['tanggal'] ?></td>
				<td><?php echo $d['meter_awal'] ?></td>
				<td><?php echo $d['meter_akhir'] ?></td>
				<td>
					<a class='btn btn-warning' href="edit_penggunaan.php?id=<?php echo $d['id_penggunaan']; ?>">Edit</a>
					<a class='btn btn-danger' href="action/hapus_penggunaan.php?acuan=<?php echo $d['id_penggunaan']; ?>">Hapus</a>
				</td>
			</tr>
			<?php
			}
		 ?>

	</table>
<?php include('footer.php'); ?>
<?php include('js.php'); ?>
</body>
</html>