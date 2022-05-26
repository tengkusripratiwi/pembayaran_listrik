<!DOCTYPE html>
<html>
<head>
	<?php include('head_ref.php') ?>
	<?php include('css.php') ?>
</head>
<body>

<?php include('nav.php') ?>
<?php include('header.php') ?>
	<h1 style="text-align: center;">Tabel Pelanggan</h1>
	<!-- tambah pelanggan  -->
	
		<a class="btn btn-success mb-2" href="tambah_pelanggan.php">Tambah</a>
	
	<!-- cari pelanggan -->
	<form action="pelanggan.php" method="post" style="float: right;">
		<input type="text" placeholder="cari nama pelanggan" name="search">
		<button type="submit" class="btn btn-primary">cari</button>
	</form>

	<!-- data pelanggan -->
	<table cellpadding="1" cellspacing="0"  width="100%" class="table table-striped table-bordered">
		<thead class="thead-dark">
		<tr>
			<th>No</th>
			
			<th>Username</th>		
			<th>Nomor kwh</th>
			<th>Nama Pelanggan</th>
			<th>Alamat</th>
			<th>Daya</th>
			<th>Hapus/Edit</th>
		</tr>
</thead>
		<?php 
			include "koneksi.php";
			$query = "select *, tarifs.id id_tarif, pelanggans.id id_pelanggan from pelanggans INNER JOIN tarifs ON pelanggans.tarif_id=tarifs.id";
			if(isset($_POST['search'])){
				$query = "select *, tarifs.id id_tarif, pelanggans.id id_pelanggan from pelanggans INNER JOIN tarifs ON pelanggans.tarif_id=tarifs.id WHERE pelanggans.nama_pelanggan LIKE '%$_POST[search]%'";
			}
			$no=1;
			$data=mysqli_query($koneksi, $query);
			while($d=mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				
				<td><?php echo $d['username'] ?></td>
				<td><?php echo $d['nomor_kwh'] ?></td>
				<td><?php echo $d['nama_pelanggan'] ?></td>
				<td><?php echo $d['alamat'] ?></td>
				<td><?php echo $d['daya_tarifperkwh'] ?></td>
				<td>
					<a class='btn btn-warning' href="edit_pelanggan.php?id=<?php echo $d['id_pelanggan']; ?>">Edit</a>
					<a class='btn btn-danger' href="action/hapus_pelanggan.php?acuan=<?php echo $d['id_pelanggan']; ?>">Hapus</a>
				</td>
			</tr>
			<?php
			}
		 ?>

	</table>
<?php include('footer.php'); ?>
<?php include('js.php') ?>
</body>
</html>