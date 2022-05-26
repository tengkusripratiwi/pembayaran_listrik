<!DOCTYPE html>
<html>
<head>
	<?php include('head_ref.php') ?>
	<?php include('css.php'); ?>
</head>
<body>
	<?php include('nav.php'); ?>
	<?php include('header.php') ?>

	<h1 style="text-align: center;">Tabel Pembayaran</h1>
	<!-- tambah pelanggan  -->

		<a class="btn btn-success" href="tambah_pembayaran.php">Tambah</a>


	<!-- cari pelanggan -->
	<form action="pembayaran.php" method="post" style="float: right;">
		<input type="text" placeholder="cari total pembayaran" name="search">
		<button class="btn btn-primary mb-2" type="submit">cari</button>
	</form>

	<!-- data pelanggan -->
	<table cellpadding="1" cellspacing="0" border="1" width="100%" class="table table-striped table-bordered">
		<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Jumlah Meter</th>
			<th>Tanggal Pembayaran</th>
			<th>Biaya Admin</th>				
			<th>Total Bayar</th>
			<th>Nama Admin</th>
			<th>Hapus/Edit</th>
		</tr>
		</thead>

		<?php 
			include 'koneksi.php';
			$query="select *, admins.id id_admin, tagihans.id id_tagihan, pembayarans.id id_pembayaran from pembayarans INNER JOIN tagihans ON pembayarans.tagihan_id=tagihans.id INNER JOIN admins ON pembayarans.admin_id=admins.id";
			if(isset($_POST['search'])){
				$query="select *, admins.id id_admin, tagihans.id id_tagihan, pembayarans.id id_pembayaran from pembayarans INNER JOIN tagihans ON pembayarans.tagihan_id=tagihans.id INNER JOIN admins ON pembayarans.admin_id=admins.id WHERE pembayarans.total_bayar LIKE '%$_POST[search]%'";
			}


			$no=1;
			$data=mysqli_query($koneksi, $query);
			while($d=mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['jumlah_meter'] ?></td>
				<td><?php echo $d['tanggal_pembayaran'] ?></td>
				<td><?php echo $d['biaya_admin'] ?></td>			
				<td><?php echo $d['total_bayar'] ?></td>
				<td><?php echo $d['nama_admin'] ?></td>
				<td>
					<a class='btn btn-warning' href="edit_pembayaran.php?id=<?php echo $d['id_pembayaran']; ?>">Edit</a>
					<a class='btn btn-danger' href="action/hapus_pembayaran.php?acuan=<?php echo $d['id_pembayaran']; ?>">Hapus</a>
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